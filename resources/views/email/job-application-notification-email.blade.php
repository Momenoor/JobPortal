<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Submission Approved</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .content {
            padding: 20px 0;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Job Application Submission Approved</h1>
    </div>
    <div class="content">
        <p>Dear {{$application->user->name}},</p>
        <p>I hope this message finds you well.</p>
        <p>We are pleased to inform you that your job submission titled <strong>"{{$application->job->title}}"</strong> has been reviewed and approved.</p>
        <p><strong>Job Details:</strong></p>
        <ul>
            <li><strong>Job ID:</strong> [{{$application->job->id}}]</li>
            <li><strong>Submission Date:</strong> {{$application->job->created_at->format('Y-m-d')}}</li>
            <li><strong>Approval Date:</strong> {{now()->format('Y-m-d')}}</li>
        </ul>
        <p>Your job is now live and available for further action. Should you have any questions or require further assistance, please do not hesitate to reach out to us at
            {{auth()->user()->email}}.</p>
        <p>Thank you for your contribution. We look forward to seeing the positive impact of your work.</p>

    </div>
    <div class="footer">
        <p>&copy; {{now()->format('Y')}} {{config('app.name')}}. All rights reserved.</p>
    </div>
</div>
</body>
</html>
