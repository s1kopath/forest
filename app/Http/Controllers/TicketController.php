<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Jobs\SendEmailJob;
use App\Models\TicketReply;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function manageTickets()
    {
        $tickets = Ticket::with(['replies', 'user', 'support'])->latest()->get();

        return view('back-end.ticket.manage-ticket', compact('tickets'));
    }


    public function replyTicket(Request $request, $id)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'reply_description' => 'required_without:reply_image',
                'reply_image' => 'required_without:reply_description',
            ]);
            // dd($request->all());
            if ($request->reply_image) {
                $imageHandler = new ImageHandlerController();
                $file_name_1 = $imageHandler->uploadAndGetPath($request->reply_image, 'ticket');
            } else {
                $file_name_1 = null;
            }

            $ticket = Ticket::find($request->ticket_id);
            if (!$ticket->response_by) {
                $ticket->response_by = auth()->id();
                $ticket->response_at = now();
                $ticket->status = 1;
                $ticket->save();

                if ($ticket->type == 'public') {
                    $url = url('/') . "/public/ticket/" . $ticket->slug;
                    $message = 'Please use the following link to reply to your ticket: <a href="' . $url . '">' . $url . '</a>';

                    $details['email'] = $ticket->email;
                    $details['message'] = $message;
                    $details['subject'] = 'Support Ticket#' . $ticket->ticket_number;

                    dispatch(new SendEmailJob($details));
                }
            }

            $newTicket = TicketReply::create([
                'ticket_id' => $request->ticket_id,
                'reply_by' => 'support',
                'text' => $request->reply_description,
                'image' => $file_name_1
            ]);

            return back()->with('message', 'Replied successfully.');
        } else {
            $ticket = Ticket::with('replies')->find($id);
            return view('back-end.ticket.ticket-details', compact('ticket'));
        }
    }

    public function updateTicket($id, $status)
    {
        $ticket = Ticket::find($id);

        if ($ticket->status == $status) {
            return back()->with('error', 'Already updated!');
        } else {
            $ticket->status = $status;
            $ticket->save();

            return back()->with('message', 'Successfully updated.');
        }
    }

    public function sendTicketLink($id)
    {
        $ticket = Ticket::find($id);

        if ($ticket->type == 'public') {
            $url = url('/') . "/public/ticket/" . $ticket->slug;
            $message = 'Please use the following link to reply to your ticket: <a href="' . $url . '">' . $url . '</a>';

            $details['email'] = $ticket->email;
            $details['message'] = $message;
            $details['subject'] = 'Support Ticket#' . $ticket->ticket_number;

            dispatch(new SendEmailJob($details));

            return back()->with('message', 'Email sent successfully to the user.');
        } else {
            return back()->with('error', 'Ticket dose not belong to public user.');
        }
    }
}
