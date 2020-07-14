@extends('layouts.client')
@section('content')
<!----start-assets/images-slider---->
		<div class="assets/images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">
		            <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg.jpg" alt=""/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title"><i class="bg"></i>Paradise Hotel <span class="hide"></span></h4>
		                        <h5 class="title1"><i class="bg"></i>Réservation en ligne <span class="hide" ></span></h5>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <!-- /Duplicate to create more slides -->
		            <div class="slide">
		                <img src="images/slider-bg.jpg" alt=""/>
		                <div class="slide_content">
		                     <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title"><i class="bg"></i>Paradise hotel <span class="hide">  </span></h4>
		                        <h5 class="title1"><i class="bg"></i> Le meilleur tarif pour votre séjour <span class="hide"></span> </h5>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		            </div>
		            <!--/slide -->
		        </div>
		        <div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>
		    </div>
		    <!--/slider -->
		</div>
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="online_reservation">
	<div class="b_room">
		<div class="booking_room">
			<h4>Réserver une chambre en ligne</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
		</div>
		<div class="reservation">
			<ul>
				<li class="span1_of_1">
					<h5>type de chambre:</h5>
					<!----------start section_room----------->
					{!! Form::open(['method' => 'post', 'route' => ['find_rooms_client.index']]) !!}

					<div class="section_room">
						<select name="cat" id="country" onchange="change_country(this.value)" class="frm-field required">
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
		<div class="clear"></div>
		</div>
	</div>

	<div class="grids_of_3">
	
	
	@foreach($Categories as $Categorie)
	<?php 

		$picture="";
		$price = "";

	?>

	@foreach($room_pictures as $room_picture)
		<?php 
		
		if ($room_picture->category_id === $Categorie->id){
			$picture = $room_picture->picture;
		}
		?>
	@endforeach

	@foreach($room_prices as $room_price)
		<?php 
		
		if ($room_price->category_id === $Categorie->id){
			$price = $room_price->price;
		}
		?>
	@endforeach
	<!--start grids_of_3 -->
		
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				<a href="details">
					<img src="{{ $picture}}" alt="" height="220"/>
					<span class="next"> </span>
				</a>
			</div> 
			<h4><a href="#">{{ucfirst(trim($Categorie->name))}}<span>{{$price}} Dhs</span></a></h4>
			<p align="justify">{{$Categorie->description}}</p>
		</div>

	@endforeach

		<div class="clear"></div>
	</div>	
</div>
</div>	


@endsection
