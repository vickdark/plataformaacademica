@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'plataformaacademica' || trim($slot) === setting('app_name'))
<img src="https://laravel.com/img/notification-logo-v2.1.png" class="logo" alt="{{ setting('app_name', 'plataformaacademica') }} Logo">
@else
{!! $slot !!}
@endif
</a>
</td>
</tr>
