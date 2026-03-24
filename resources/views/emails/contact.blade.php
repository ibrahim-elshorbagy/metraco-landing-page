<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Contact Form Submission</title>
  <style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      line-height: 1.6;
      color: #1f2937;
      margin: 0;
      padding: 24px;
      background-color: #eef4ff;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid #dbeafe;
      box-shadow: 0 18px 48px rgba(15, 74, 161, 0.18);
    }

    .header {
      background: linear-gradient(145deg, #062a5b 0%, #0f4aa1 55%, #2563eb 100%);
      padding: 34px 24px 28px;
      text-align: center;
    }

    .logo {
      max-width: 220px;
      height: auto;
      display: inline-block;
    }

    .subtitle {
      margin: 14px 0 0;
      color: #dbeafe;
      font-size: 14px;
      letter-spacing: 0.2px;
    }

    .content {
      padding: 32px 28px;
    }

    .title {
      font-size: 24px;
      font-weight: 700;
      color: #0f4aa1;
      margin: 0 0 20px;
    }

    .info-section {
      background-color: #f8fbff;
      border: 1px solid #dbeafe;
      border-radius: 12px;
      padding: 18px;
      margin-bottom: 16px;
    }

    .info-label {
      font-weight: 600;
      color: #0f4aa1;
      margin-bottom: 4px;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.4px;
    }

    .info-value {
      color: #334155;
      margin-bottom: 14px;
      font-size: 15px;
    }

    .message-section {
      background-color: #ffffff;
      border: 1px solid #bfdbfe;
      border-radius: 12px;
      padding: 18px;
    }

    .message-label {
      font-weight: 600;
      color: #0f4aa1;
      margin-bottom: 8px;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.4px;
    }

    .message-content {
      color: #334155;
      line-height: 1.6;
      font-size: 15px;
    }

    .footer {
      background-color: #f8fbff;
      border-top: 1px solid #dbeafe;
      color: #64748b;
      padding: 18px 20px;
      text-align: center;
      font-size: 13px;
    }

    .footer a {
      color: #0f4aa1;
      font-weight: 600;
      text-decoration: none;
    }

    @media (max-width: 640px) {
      body {
        padding: 12px;
      }

      .content {
        padding: 22px 16px;
      }

      .title {
        font-size: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Header -->
    <div class="header">
      {{-- <img src="{{ url('assets/logo.webp') }}" alt="METRACO" class="logo"> --}}
      <p class="subtitle">New Contact Form Submission</p>
    </div>

    <!-- Content -->
    <div class="content">
      <h1 class="title">New Contact Form Submission</h1>

      <div class="info-section">
        <div class="info-label">Name:</div>
        <div class="info-value">{{ $name }}</div>

        <div class="info-label">Email:</div>
        <div class="info-value">{{ $email }}</div>

        @if ($company)
          <div class="info-label">Company:</div>
          <div class="info-value">{{ $company }}</div>
        @endif
      </div>

      <div class="message-section">
        <div class="message-label">Message:</div>
        <div class="message-content">{!! nl2br(e($contactMessage)) !!}</div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <p>This message was sent from the METRACO website contact form.</p>
      <p><a href="{{ url('/') }}">Visit our website</a></p>
    </div>
  </div>
</body>

</html>
