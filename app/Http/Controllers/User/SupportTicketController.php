<?php

namespace App\Http\Controllers\User;

use App\Models\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageHandlerController;
use App\Models\TicketReply;

class SupportTicketController extends Controller
{
    public function userTicketPage()
    {
        $tickets = Ticket::where('user_id', auth()->id())->latest()->paginate(10);

        return view('back-end.public.ticket.ticket-page', compact('tickets'));
    }

    public function createUserTicket(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->screenshot) {
                $imageHandler = new ImageHandlerController();
                $file_name_1 = $imageHandler->base64Upload($request->screenshot, 'ticket');
            } else {
                $file_name_1 = null;
            }

            $rand = rand(11111111, 99999999);
            $newTicket = Ticket::create([
                'type' => 'private',
                'slug' => Str::slug($request->subject) . '-' . $rand,
                'ticket_number' => $rand,
                'user_id' => auth()->id(),
                'date_time' => now(),
                'subject' => $request->subject,
                'description' => $request->details,
                'image' => $file_name_1
            ]);

            return redirect()->route('user_support_ticket')->with('message', 'Ticket created successfully.');
        } else {
            return view('back-end.public.ticket.create-ticket');
        }
    }

    public function replyUserTicket(Request $request, $id)
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

            $newTicket = TicketReply::create([
                'ticket_id' => $request->ticket_id,
                'reply_by' => 'user',
                'text' => $request->reply_description,
                'image' => $file_name_1
            ]);

            return back()->with('message', 'Replied successfully.');
        } else {
            $ticket = Ticket::with('replies')->find($id);
            return view('back-end.public.ticket.ticket-details', compact('ticket'));
        }
    }

    public function publicCreateTicket(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required:email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $rand = rand(11111111, 99999999);
        $newTicket = Ticket::create([
            'type' => 'public',
            'slug' => Str::slug($request->subject) . '-' . $rand,
            'ticket_number' => $rand,
            'name' => $request->name,
            'email' => $request->email,
            'date_time' => now(),
            'subject' => $request->subject,
            'description' => $request->message
        ]);

        return back()->with('message', 'Ticket created successfully.');
    }
}
