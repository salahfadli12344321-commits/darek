<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body{
  margin:0;
  min-height:100vh;
  display:flex;
  justify-content:center;   
  align-items:center;      
  font-family: Arial, sans-serif;
  background:#f2f2f2;
}



.content{
  width: 420px;
  padding: 30px;
  background: white;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0,0,0,.1);
}


.content label{
  display:block;
  margin-top:12px;
  font-weight:600;
}

.content input{
  width:100%;
  padding:12px;
  margin-top:6px;
  border:1px solid #ccc;
  border-radius:10px;
  box-sizing:border-box;
}
/* From Uiverse.io by Yaya12085 */ 
.form {
  display: flex;
  flex-direction: column;
  gap: 6px;
  max-width: 350px;
  background-color: #fff;
  padding: 13px;
  border-radius: 20px;
  position: relative;
}

.title {
  font-size: 28px;
  color: royalblue;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: royalblue;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: royalblue;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: royalblue;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.flex {
  display: flex;
  width: 100%;
  
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 8px 10px ;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 6
  600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background-color: royalblue;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}

.submit:hover {
  background-color: rgb(56, 90, 194);
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}
/* زر */
.content button{
  width:100%;
  margin-top:16px;
  padding:12px;
  border:0;
  border-radius:10px;
  cursor:pointer;
  background:#2f6feb;
  color:#fff;
  font-weight:700;
}
</style>
<body>
    <div class='app'>
        <div class='titre'></div>
    </div>

     <div class='content'>
        <!-- From Uiverse.io by Yaya12085 --> 
<form class="form" method='post' action="{{ route('register.store') }}">
  @csrf
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input required="" placeholder="firstname" name="firstname" type="text" class="input" value="{{ old('firstname') }}" autofocus>
            <span></span>
        </label>

        <label>
            <input required="" placeholder="lastname" name="lastname" type="text" class="input" value="{{ old('lastname') }}">
            <span></span>
        </label>
    </div>  
            
      <div>
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}" />
        </div>
        <div>
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password" value="{{ old('password') }}" />
        </div>
        <div>
            <label for="password_confirmation">Confirmation</label>
            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" />
        </div>
        <br />
    <button class="submit">Submit</button>
    <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
</form>

     @yield('content')
     </div>
     @if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  
    </div>

     <div class='menu'></div>
    </div>

     <div class='footer'></div>
    </div>
</body>
</html>