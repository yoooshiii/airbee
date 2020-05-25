@extends('layouts.app')

@section('title','宿予約システム')

@section('menubar')
    @parent
    @endsection

@section('content')
<div class="container">

      <h1>登録フォーム</h1>
      <hr>
      <form action="./toroku" method="post">
            @csrf
  			<div class="form-group row">
    			<label for="familyname"familyname class="col-sm-2 col-form-label">苗字:</label>
    			<div class="col-sm-4">
             <input type="text" class="form-control" id="familyname" name="familyname" value="{{old('familyname')}}">
             @error('familyname')
             <p>{{$message}}</p>
             @enderror
      			</div>
  			</div>
  			<div class="form-group row">
    			<label for="firstname" class="col-sm-2 col-form-label">名前:</label>
    			<div class="col-sm-4">
             <input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}">
             @error('firstname')
             <p>{{$message}}</p>
             @enderror
        	</div>
  			</div>
  			<div class="form-group row">
    			<label for="postal" class="col-sm-2 col-form-label">郵便番号:</label>
    			<div class="col-sm-4">
             <input type="text" class="form-control" name="postal" value="{{old('postal')}}">
             @error('postal')
             <p>{{$message}}</p>
             @enderror
        	</div>
  			</div>
  			<div class="form-group row">
    			<label for="address" class="col-sm-2 col-form-label">住所:</label>
    			<div class="col-sm-4">
             <input type="text" class="form-control" name="address" value="{{old('address')}}">
             @error('address')
             <p>{{$message}}</p>
             @enderror
        	</div>
  			</div>
  			<div class="form-group row">
    			<label for="tel" class="col-sm-2 col-form-label">電話番号:</label>
    			<div class="col-sm-4">
            <input type="text" class="form-control" name="tel" value="{{old('tel')}}">
            @error('tel')
            <p>{{$message}}</p>
            @enderror
          </div>
  			</div>
  			<div class="form-group row">
    			<label for="email" class="col-sm-2 col-form-label">Eメールアドレス:</label>
    			<div class="col-sm-4">
            				<input type="email" class="form-control"  name="email" value="{{old('email')}}">
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
          </div>
  			</div>
  			<div class="form-group row">
    			<label for="birthday" class="col-sm-2 col-form-label">生年月日:</label>
    			<div class="col-sm-4">
              <input type="date" class="form-control" id="birthday" name="birthday" value="{{old('birthday')}}">
              @error('birthday')
              <p>{{$message}}</p>
              @enderror
          	</div>
  			</div>
  			<div class="form-group row">
    			<label for="password" class="col-sm-2 col-form-label">パスワード：</label>
    			<div class="col-sm-4">
      				<input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
              @error('password')
              <p>{{$message}}</p>
              @enderror
        	</div>
  			</div>
  			<div class="form-group row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
          			<button type="submit" class="btn btn-primary">登録</button>
        		</div>
                <div class="col-sm-4">
                </div>
  			</div>
		</form>
   </form>
  </div>
</div>
  @endsection

  @section('footer')
  @endsection
