
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,800;1,300;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div style="margin: 2rem;">
    <div style="border-radius: 20px; box-shadow: 0 0 1rem rgb(0 0 0 / 10%); padding: 2rem;">
        <div style="font-family: 'Lobster', sans-serif; text-align: center; margin: .5rem; ">
            <img src="https://cdn.sanity.io/images/599r6htc/production/46a76c802176eb17b04e12108de7e7e0f3736dc6-1024x1024.png?w=670&h=670&q=75&fit=max&auto=format" alt="">
        </div>
        <div style="font-family: 'Montserrat', sans-serif; ">
            <p style="display: block; font: 16px; margin-bottom: 1rem;">
                {{__('Hello')}} <b> {{$name}} </b> <br><br>
                {{__('Thank you for your trust on us, We received your email and we are processing it. We gonna contact you as fast as we can')}}. <br> <br>
                <b>{{__('Have a good day')}}!</b>
            </p>
        </div>
    </div>
</div>
</body>
</html>