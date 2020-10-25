@extends('emailLayouts.default')
@section('title', ' Hello ' . $name)
@section('body')
    <tbody>
    <tr>
        <td style="font:14px/25px arial; color:#333; padding: 24px 0 35px;">

            <p>{!!  $messageBody !!}</p>

            <br/>
            <p>Many thanks,</p>
            <p>Tasks Management App</p>
        </td>
    </tr>
    </tbody>
@stop
