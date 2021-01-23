<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size: 16pt; color: #999;}
h1 {font-size: 100pt; text-align:right; color:#eee; margin: -40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt)
{
    return "<{$tag}>" . $txt . "</{$tag}>";
}


class HelloController extends Controller
{


    // public function index(): string
    // {
    //     global $head, $style, $body, $end;
    //     $html = $head . tag('title', 'Hello/Index') . $style .
    //         $body
    //         . tag('h1', 'Index') . tag('p', 'this is Index page')
    //         . '<a href="/hello/other">go to Other page</a>'
    //         . '<br>'
    //         . '<a href="/hello/1/pass">go to Use Route Param page</a>'
    //         . $end;
    //     return $html;
    // }

    public function index()
    {
        return view('hello.index', ['msg'=>'']);
    }

    public function post(Request $request) {
        return view('hello.index', ['msg'=>$request->msg]);
    }

    public function indexWithQueryString(Request $request)
    {
       $data = [
           'msg' => 'これはコントローラから渡されたメッセージです',
           'id' => $request->id
       ];
       return view('hello.index', $data);
    }

    public function other(): string
    {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Other') . $style .
            $body
            . tag('h1', 'Other') . tag('p', 'this is Other page')
            . $end;
        return $html;
    }

    public function indexWithRouteParams($id = '1', $pass = 'pass'): string
    {
        global $head, $style, $body, $end;

        $html = $head . tag('title', 'Hello/Index with route params') . $style .
            $body
            . tag('h1', 'Index') . tag('p', 'this is Index page with route params')
            . '<ul>'
            . tag('li', "id = $id")
            . tag('li', "pass = $pass")
            . '</ul>'
            . $end;
        return $html;
    }
}
