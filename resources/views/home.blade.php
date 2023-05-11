@extends('layouts.main')

@section('container')
    
    <div class="container">
        <div class="row">
            <div class="left-side col-sm-6">
                <img src="img/me.jpg" class="mt-2 img-rounded" style="margin-left: 65px; border-radius: 50%; border:3px solid #12E1B9;" width="200" height="200" alt="Ahmad Rifai">
                <h2 class="mt-4" style="margin-left: 80px; color: aliceblue;">{{ $name }}</h2>
                <p class="mt-2 text-secondary" style="margin-left: 80px;">{{ $skill }}</p>
            </div>
            <div class="right-side col-sm-6 mt-4">
                <img src="img/world.jpg" width="550" height="300" alt="world">
            </div>
        </div>
        <div class="row">
            <div class="left-bottom-side">
                <button type="button" class="btn btn-sm text-uppercase mt-4" style="border: 1px solid #12E1B9; color: #12E1B9; margin-left: 85px;">Recent Portfolio
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-toggle2-off" style="margin-left: 2px; margin-bottom: 2px;" viewBox="0 0 16 16">
                    <path d="M9 11c.628-.836 1-1.874 1-3a4.978 4.978 0 0 0-1-3h4a3 3 0 1 1 0 6H9z"/>
                    <path d="M5 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 5 3a5 5 0 0 0 0 10z"/>
                    </svg>
                </button>
                <div class="card mt-4 bg-dark text-white" style="border: 1px solid #12E1B9; max-width: 200px; max-height: 105px; margin-top: 20px; margin-left: 70px;">
                    <img src="img/card-1.jpg" height="100" width="200" class="card-img mb-4" alt="project1">
                    <div class="card-img-overlay">
                      <button class="btn btn-sm mt-5 card-title text-center text-uppercase" style="color: black; background-color: #12E1B9; border: 1px solid #12E1B9; margin-left: 55px;">more</button>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

@endsection

