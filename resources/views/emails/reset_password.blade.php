Hello {{ $user->name }},



<p><a href="{{ route('show-reset-password', array($token)) }}">Click here to reset password</a></p>