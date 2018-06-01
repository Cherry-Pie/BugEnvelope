<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log Envelope</title>
        <style>
            /* 
                Fix Apple Mail auto linking and coloring them as 
                blue which is unreadable on the blue background. 
            */
            a {
                color: white;
            }
        </style>
    </head>
    <body style="margin: 0px; padding: 0px;">
        <div style="padding: 10px; background-color: #55688A; color: white;">
            <h4 style="margin: 0 0 0 0; font-weight: 100;">
                <div>[{{ $method }}]: {{ $fullUrl }}</div>
            </h4>
            <h1 style="margin: 0 0 0 0; font-size: 3em;">
                {{ $class }}
                <br>
                {{ $exception }}
            </h1> 
        </div>
        <div style="border-top: 1px solid #272727; border-bottom: 1px solid #55688A; background-color: #55688A; color: #ffffff; padding: 5px 5px 5px 5px;">{{ $file }}</div>
        <pre style="margin: 0 0 0 0; background: #272727; color: #cccccc; font-family: monospace; font-size: 12px; padding: 5px 12px; white-space: pre-wrap; word-break: break-word;"><?php foreach ($exegutor as $lineInfo) : ?>{!! $lineInfo['wrap_left'] !!}{!! $lineInfo['line'] !!}{!! $lineInfo['wrap_right'] !!}<?php endforeach; ?></pre>
        <div style="padding: 10px; background-color: #55688A;">
            <div style="color: #ffffff; margin: 0 0 0 0; font-size: 22px;">Stack trace</div>
        </div>
        <pre style="margin: 0 0 0 0; background: #272727; color: #aaaaaa; font-family: monospace; font-size: 12px; padding: 5px 12px; white-space: pre-wrap; word-break: break-word;">{{ $error }}</pre>
        <div style="padding: 6px; text-align: right; background-color: #55688A;">
            <h6 style="margin: 0 0 0 0; font-weight: 100; font-family: monospace; font-size: 10px; color: #F5F5F5;">developed by Yaro @ https://github.com/Cherry-Pie</h6>
        </div>
        
        <table style="border-collapse: collapse;">
            <tbody>
                @foreach ($storage as $caption => $data)
                    @include('log-envelope::storage')
                @endforeach
            </tbody>
        </table>
    </body>
</html>

