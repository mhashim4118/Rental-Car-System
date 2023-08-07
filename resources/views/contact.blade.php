<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <style>
        .s {
            float: right;
        }
    </style>
</head>

<body>
    <x-header />
    <br><br><br><br><br>
    <div class="container" style="margin-bottom: 12%;">
        <div class="row">
            <div class="col-6">
                <h1>Contact Us</h1>

                <form method="POST" action="/contactmessage">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                            value="{{ old('name') }}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                            value="{{ old('email') }}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control"
                            placeholder="Enter the subject of your message" value="{{ old('subject') }}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Enter your message"
                            rows="5" required>{{ old('message') }}</textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary s">Submit</button>
                </form>
            </div>
            <div class="col-6 mt-2">
                
                <p><strong>Address:</strong> 123 Main Street, Anytown, USA</p>
                <p><strong>Phone:</strong> (123) 456-7890</p>
                <p><strong>Email:</strong> info@example.com</p>
            </div>
        </div>

        <br>
    </div>
    <br>
    <x-footer />
</body>

</html>