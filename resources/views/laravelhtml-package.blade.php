<!DOCTYPE html>
<html>
    <head>
        <title>Laravel CRUD</title>
    </head>
<body>
    <h2>Laravel Collective HTML Package Attributes</h2>

    <h3>Laravel Collective HTML Attributes</h3>
    <div>
        <!-- anchor tag -->
        {!! Html::link('simple-page-load', 'Anchor Tag') !!}
    </div>
    <div>
        <!-- img tag -->
        {!! Html::image(asset('images/laravel.png'), 'Img Tag') !!}
    </div>
    <div>
        <!-- load online script -->
        {!! Html::script('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') !!}
        <!-- load offline script -->
        {!! Html::script(asset('js/bootstrap.bundle.min.js')) !!}
    </div>
    <div>
        <!-- load online style -->
        {!! Html::style('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') !!}
        <!-- load offline style -->
        {!! Html::style(asset('css/bootstrap.min.css')) !!}
    </div>
    <div>
        <!-- secure link tag -->
        {!! Html::secureLink('simple-page-load', 'Secure Link') !!}
    </div>
    <div>
        <!-- linkRoute with parameters -->
        {!! Html::linkRoute('htmllink-route', 'link route', ['id' => 1]) !!}
    </div>
    <div>
        <!-- linkAction with parameters -->
        {!! Html::linkAction([App\Http\Controllers\HtmllinkRouteController::class, 'withparameters'], 'link action', ['id' => 1]) !!}
    </div>

    <h3>Laravel Collective HTML Form</h3>
    <div>
        <!-- html form start here -->
        {!! Form::open(['url' => 'foo/bar']) !!}
        
            <div>
                <!-- form html label -->
                {!! Form::label('first_name', 'First Name :') !!}
                <!-- form html input type text -->
                {!! Form::text('first_name', null, ['placeholder' => 'Enter First Name']) !!}
            </div>
            
            <div>
                <!-- form html label -->
                {!! Form::label('last_name', 'Last Name :') !!}
                <!-- form html input type text -->
                {!! Form::text('last_name', null, ['placeholder' => 'Enter Last Name']) !!}
            </div>

            <div>
                <!-- form html label -->
                {!! Form::label('password', 'Password :') !!}
                <!-- form html input type password -->
                {!! Form::password('password') !!}
            </div>

            <div>
                <!-- form html label -->
                {!! Form::label('email', 'Email :') !!}
                <!-- form html input type email -->
                {!! Form::email('email', null, ['placeholder' => 'Enter Email']) !!}
            </div>

            <div>
                <!-- form html label -->
                {!! Form::label('message', 'Message :') !!}
                <!-- form html input type textarea -->
                {!! Form::textarea('message', null, ['placeholder' => 'Enter Your Message']) !!}
            </div>

            <div>
                <!-- form html label -->
                {!! Form::label('gender', 'Gender :') !!}
                <!-- form html input type select(dropdown) -->
                {!! Form::select('gender', ['' => 'Select Gender', 'm' => 'Mail', 'f' => 'Femail']) !!}
            </div>

            <div>
                <!-- form html label -->
                {!! Form::label('question', 'Do you have any Account? :') !!}
                {!! Form::label('yes', 'Yes') !!}
                <!-- form html input type checkbox -->
                {!! Form::checkbox('checkbox1', 'yes') !!}
                {!! Form::label('no', 'No') !!}
                <!-- form html input type checkbox -->
                {!! Form::checkbox('checkbox2', 'no') !!}
            </div>

            <div>
                <!-- form html label -->
                {!! Form::label('account', 'Private Account :') !!}
                <!-- form html input type radio -->
                {!! Form::radio('name', 'value') !!}
            </div>

            <div>
                <!-- form html label -->
                {!! Form::label('file', 'Upload your File :') !!}
                <!-- form html input type file -->
                {!! Form::file('image') !!}
            </div>

            <div>
                <!-- form html input type submit -->
                {!! Form::submit('Submit Button') !!}
                <!-- form html button -->
                {!! Form::button('Simple Button', ['type' => 'submit']) !!}
            </div>

        {!! Form::close() !!}
        <!-- html form close here -->
    </div>

</body>
</html>