@extends('layouts.app')



@section('content')

    <div class="container justify-content-center" style="margin-top: 10px">
        <h1 align="center">Quick count Kandidat</h1>

        <div style="display: flex;margin-top: 70px;justify-content: center">
            @foreach($kandidat as $s)
            <div class="card border-primary" style="width: 18rem ; margin-right: 50px">
                <img src="{{asset('img/avatar.svg')}}" style="width: 65%;margin: 0 auto ; margin-top: 50px" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <p class="card-text"> No urut : {{$s->id}}</p>
                    <p class="card-text"> Nama : {{$s->nama}}</p>
                    <p class="card-text"> Visi : {{$s->visi}}</p>
                    <p class="card-text"> Misi : {{$s->misi}}</p>

                </div>
                <div class="card-footer">
                    <p> Hasil Suara {{count($s->voteuser)}}</p>

                </div>
            </div>

            @endforeach



        </div>
        <div id="chartContainer" style="height: 300px; width: 100%; margin-top: 50px"></div>

    </div>





@endsection


@push('script')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    var accounts = [];
    var hasil = [];
    var i = 0;
    @foreach($kandidat as $t)
        accounts[i] = "{{$t->id}}. Total Suara : ";
        hasil[i] = "{{count($t->voteuser)}}";
    i++;
        @endforeach
        console.log(accounts.length);
    window.onload = function() {
        var z = 0;
var test = "{y: 1, label: `kandidat 1 : `},{y: 2, label: `kandidat 2 : `}";
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Quick Count"
            },
            data: [{
                type: "pie",
                startAngle: 120,
                indexLabel: "{label} {y}",
                dataPoints: [
                            @for ($i = 0; $i < count($kandidat); $i++)
                        {y: hasil[{{$i}}], label: "ID kandidat No : " + accounts[{{$i}}]} ,
                    @endfor
                ]
            }]
        });
        chart.render();
    }
</script>
@endpush