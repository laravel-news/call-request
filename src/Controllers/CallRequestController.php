<?php  namespace LaravelNews\CallRequest\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelNews\CallRequest\Models\CallRequest;

class CallRequestController extends Controller
{
    
    public  function  form(Request $request)
    {

        $call = null;

        if ($request->isMethod('post'))
        {
            $call =  new CallRequest($request->all());
            $call->remote_ip = $request->ip();
            if ($call->save()) {

                $email = \Config::get('callrequest.notify_email');
                if (!empty($email)) {
                    // Для упрощения отправку сообщения сделаем здесь же, но вообще так лучше не делать :)
                    $message = "Новый заказ звонка с сайта\n";
                    $message .= "Все данные и сообщение";
                    $subject = "Алярма,  новый заказ звонка!";

                    \Mail:: raw($message, function ($msg) use ($email, $subject) {
                        $msg->to($email);
                        $msg->subject($subject);
                    });
                }
            }

        }

        return view('call-request::form', compact('call'));
    }

}