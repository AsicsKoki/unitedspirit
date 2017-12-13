@extends('layouts.master')

@section('content')
<style>
@media only screen and (max-width: 991px) and (min-width: 768px) {
  .col-sm-3 {
    margin: 3%;
  }
}

</style>
<div class="container myCampus_main">
            <h1 class="text-center">My Campus Box</h1>
            <hr>
            <div class="row">   
                @foreach($user[0]->weeks as $week)
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">
                        <a href="{{ route('getSpecificWeek',['wid'=> $week->id]) }}">
                            <span class="campus_week_img">
                                @if(isset($week->images[0]->path))
                                <img src="{{ URL::to('/') . $week->images[0]->path  }}" alt="">
                                @endif
                            </span>
                            <span>Week {{$week->id}} : {{ $week->name }}</span>
                        </a>

                    </div>
                  

                </div>
                @endforeach  
            </div>
            
<!-- 
            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 5</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 6</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 7</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 8</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 9</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 10</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 11</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 12</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 13</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 14</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 15</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 16</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 17</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 18</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 19</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 20</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 21</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 22</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 23</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 24</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 25</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 26</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 27</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 28</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 29</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 30</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 31</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 32</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 33</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 34</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 35</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 36</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 37</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 38</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 39</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 40</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 41</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 42</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 43</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 44</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 45</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 46</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 47</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 48</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 49</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 50</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Week 51</div>
                </div>
                <div class="col-sm-3 center-block">
                    <div class="campus_week text-center">Weel 52</div>
                </div>
            </div>-->
        </div> 



@endsection

