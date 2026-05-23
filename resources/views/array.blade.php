@unless (Auth::check())
    <div>
        you are not signed in
    </div>
@endunless
@isset($user)
    <div>
        There is user
    </div>
@endisset
@empty($user)
    <div>Thee is no user</div>
@endempty
