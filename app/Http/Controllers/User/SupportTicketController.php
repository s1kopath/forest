<?php

namespace App\Http\Controllers\User;

use App\Models\Ticket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageHandlerController;

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

            $newTicket = Ticket::create([
                'type' => 'private',
                'slug' => Str::slug($request->subject) . '-' . uniqid(),
                'user_id' => auth()->id(),
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
            dd($request->all());
            // if ($request->screenshot) {
            //     $imageHandler = new ImageHandlerController();
            //     $file_name_1 = $imageHandler->base64Upload($request->screenshot, 'ticket');
            // } else {
            //     $file_name_1 = null;
            // }

            // $newTicket = Ticket::create([
            //     'type' => 'private',
            //     'slug' => Str::slug($request->subject) . '-' . uniqid(),
            //     'user_id' => auth()->id(),
            //     'subject' => $request->subject,
            //     'description' => $request->details,
            //     'image' => $file_name_1
            // ]);

            return redirect()->route('user_support_ticket')->with('message', 'Ticket created successfully.');
        } else {
            $ticket = Ticket::with('replies')->find($id);
            return view('back-end.public.ticket.ticket-details', compact('ticket'));
        }
    }
}
