@extends('layouts.app')

@section('content')
    <div class="container mt-5 text-center">
        <h1 class="spectacular-title">Titulo de prueba</h1>
        <p class="justified-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="line-container">
            <div class="lineR"></div>
            <div class="math-symbol">&infin;</div>
            <div class="lineL"></div>
        </div>
        
    </div>
@endsection

<style>
.line-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
}

.spectacular-title {
    font-size: 64px; /* Large font size */
    font-weight: bold;
    color: #ff5733; /* Bright color */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Text shadow */
    font-family: 'Georgia', serif; /* Custom font */
    margin-bottom: 20px;
    text-align: left; /* Align title to the left */
}

.lineR {
    flex: 1;
    height: 1px;
    background: linear-gradient(to right, transparent, #ff5733);
}
.lineL {
    flex: 1;
    height: 1px;
    background: linear-gradient(to left, transparent, #ff5733);
}

.justified-text {
    text-align: justify;
}

.math-symbol {
    padding: 0 10px;
    color: #ff5733;
    font-size: 24px;
    font-weight: bold;
}


</style>

