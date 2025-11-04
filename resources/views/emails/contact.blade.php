<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f4f4f4;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:30px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background-color:#21294a; padding:20px;">
                            <h2 style="color:#ffffff; margin:0;">📩 New Email Received</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px; color:#21294a;">
                            <p style="margin:0 0 15px 0; font-size:16px;">
                                You’ve received a new email from <strong>{{ $name }}</strong>.
                            </p>

                            <table cellpadding="8" cellspacing="0" width="100%" style="border-collapse:collapse; font-size:15px;">
                                <tr>
                                    <td style="font-weight:bold; color:#21294a;">Email:</td>
                                    <td><a href="mailto:{{ $email }}" style="color:#21294a; text-decoration:none;">{{ $email }}</a></td>
                                </tr>
                                <tr style="background-color:#f9f9f9;">
                                    <td style="font-weight:bold; color:#21294a;">Phone:</td>
                                    <td>{{ $phone }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; color:#21294a; vertical-align:top;">Message:</td>
                                    <td>
                                        <div style="margin-top:10px; padding:12px; background-color:#f9f9f9; border:1px solid #e0e0e0; border-radius:6px; font-size:15px; line-height:1.6; color:#333;">
                                            {{ $body }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin-top:25px; font-size:14px; color:#555;">
                                Please respond to this email at your earliest convenience.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color:#21294a; padding:15px; color:#ffffff; font-size:13px;">
                            © {{ date('Y') }} Care Connect Solutions. All rights reserved.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
