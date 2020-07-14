@extends('layouts.client')
@section('content')

<div class="main_bg">
<div class="wrap">
	<div class="online_reservation">
	<div class="b_room">
		
		<div class="reservation">
			<ul>
				<li class="span1_of_1">
					<h5>type de chambre:</h5>
					<!----------start section_room----------->
					{!! Form::open(['method' => 'post', 'route' => ['find_rooms_client.index']]) !!}

					<div class="section_room">
						<select id="country" name="cat" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Selectionner un type</option>
							@foreach($Categories as $Categorie)
				           		 <option value="{{$Categorie->id}}">{{ucfirst(trim($Categorie->name))}}</option>
							@endforeach
		        		</select>
					</div>	
				</li>
				<li  class="span1_of_1 left">
					<h5>check-in-date:</h5>
					<div class="book_date">
						
							<input class="date" name="time_from" id="datepicker" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						

					</div>					
				</li>
				<li  class="span1_of_1 left">
					<h5>check-out-date:</h5>
					<div class="book_date">
					
							<input class="date" name="time_to" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						
					</div>		
				</li>
				<li class="span1_of_1 left">
					<h5>Adultes:</h5>
					<!----------start section_room----------->
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>					
				</li>
				<li class="span1_of_1">
					<div class="date_btn">
						
                    {!! Form::submit('Voir la disponibilité', ['class' => 'btn btn-primary']) !!}
					{!! Form::close() !!}
					</div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>

    <div class="panel panel-default">

                </div>
            </div>
        </div>
        </div>
        @if (isset($rooms) && is_null($rooms))
            <div class="form-group" style="text-align: center">
                <label>@lang('quickadmin.find-room.no_rooms_found')</label>
            </div>
        @endif
        
@if (!is_null($rooms))
<h3 class="page-title">@lang('quickadmin.find-room.title')</h3>

<div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>@lang('quickadmin.rooms.fields.room-number')</th>
                    <th>@lang('quickadmin.rooms.fields.floor')</th>
                    <th>@lang('quickadmin.rooms.fields.description')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                        <tr data-entry-id="{{ $room->id }}">
                            <td></td>
                            <td field-key='room_number'>{{ $room->room_number }}</td>
                            <td field-key='floor'>{{ $room->floor }}</td>
                            <td field-key='description'>{!! $room->description !!}</td>
                            <td>
                                @can('booking_create')
                                    <button class="btn btn-primary">
                                        <a style="color: #ffffff;" href="{{ route('admin.bookings.create',
                                        ['room_id' => $room->id,'time_from' => $time_from, 'time_to' => $time_to]) }}">
                                            {!!trans('quickadmin.find-room.book_room')!!}</a>
                                    </button>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
