@extends('master')

@section('content')
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Reminder</th>
					<th>Frequency</th>
					<th>Day</th>
					<th>Date</th>
					<th>Time</th>
					<th>Run once?</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($reminders as $reminder)
				<tr>
					<td>{{ $reminder->body }}</td>
					<td>{{ $reminder->fequency }}</td>
					<td>{{ $reminder->day ?: '-' }}</td>
					<td>{{ $reminder->date ?: '-' }}</td>
					<td>{{ $reminder->time }}</td>
					<td>{{ $reminder->run_once ? 'Yes' : 'No' }}</td>
					<td>
						<a href="">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection