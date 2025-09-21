<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Contact Message</title>
</head>

<body style="margin:0;padding:0;background:#f5f7fb;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; color:#111827;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background:#f5f7fb; padding:24px 0;">
        <tr>
            <td align="center" style="padding:0 16px;">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="max-width:640px;background:#ffffff;border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.06);overflow:hidden;">
                    <tr>
                        <td style="background:linear-gradient(135deg,#0ea5e9,#6366f1);padding:20px 24px;color:#ffffff;">
                            <div style="font-size:18px;font-weight:600;">New Contact Message</div>
                            <div style="opacity:0.9;font-size:12px;">You received a new message from your website contact form.</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:20px 24px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:separate;border-spacing:0 8px;">
                                <tr>
                                    <td style="width:140px;color:#6b7280;font-size:13px;">Name</td>
                                    <td style="font-size:14px;font-weight:600;color:#111827;">{{ $mailData->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td style="width:140px;color:#6b7280;font-size:13px;">Email</td>
                                    <td style="font-size:14px;">
                                        <a href="mailto:{{ $mailData->email }}" style="color:#2563eb;text-decoration:none;">{{ $mailData->email ?? '-' }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:140px;color:#6b7280;font-size:13px;">Phone</td>
                                    <td style="font-size:14px;">{{ $mailData->phone ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td style="width:140px;color:#6b7280;font-size:13px;">Service</td>
                                    <td style="font-size:14px;">{{ $mailData->service ?? '-' }}</td>
                                </tr>
                            </table>

                            <div style="margin-top:16px;padding-top:12px;border-top:1px solid #e5e7eb;"></div>

                            <div style="font-size:13px;color:#6b7280;margin-bottom:6px;">Message</div>
                            <div style="font-size:14px;line-height:1.6;color:#111827;background:#f9fafb;border:1px solid #e5e7eb;border-radius:8px;padding:12px;white-space:pre-line;">{{ $mailData->message ?? '-' }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#f9fafb;color:#6b7280;font-size:12px;padding:14px 24px;">
                            This email was generated automatically by your website. You can reply directly to this email to respond to the sender.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>

