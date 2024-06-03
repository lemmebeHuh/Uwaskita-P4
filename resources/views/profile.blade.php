@extends ('dashboard')
@section ('MainContent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profileee.css">
</head>
<style>


.profile-container {
    display: flex;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    background-color: #333;
    width: 400px;
}

.profile-picture {
    width: 120px;
    height: 120px;
    overflow: hidden;
}

.profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-details {
    padding: 20px;
}

.profile-name {
    font-size: 24px;
    color: white;
    margin-bottom: 8px;
    animation: fadeInUp 1s ease forwards;
}

.profile-email {
    font-size: 16px;
    color: beige;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<body>
    <div class="profile-container">
        <div class="profile-picture">
        @if(Auth::user()->role == 'operator')
        <img src="{{asset('asset/img/')}}/{{Auth::user()->name}}.jpg" alt="Profile Picture">
        @elseif(Auth::user()->role == 'mahasiswa')
        <img src="{{asset('asset/img/')}}/{{Auth::user()->name}}.jpg" alt="Profile Picture">
        @else
        <img src="{{asset('asset/img/')}}/{{Auth::user()->name}}.jpg" alt="Profile Picture">
        @endif
        </div>
        <div class="profile-details">
            <h1 class="profile-name">{{Auth::user()->name}}</h1>
            <p class="profile-email">{{Auth::user()->email}}</p>
        </div>
    </div>

    <h1></h1>
</body>
</html>
@endsection