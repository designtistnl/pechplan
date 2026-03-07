<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; color: #1d1d1b; line-height: 1.6; margin: 0; padding: 0; background: #f4f4f4; }
        .wrap { max-width: 600px; margin: 20px auto; background: #ffffff; border-radius: 8px; overflow: hidden; }
        .header { background: #1d1d1b; padding: 24px 32px; }
        .header img { height: 28px; }
        .body { padding: 32px; }
        .label { font-size: 12px; color: #888; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .value { font-size: 16px; margin-bottom: 20px; }
        .message-box { background: #f7f5f2; border-radius: 8px; padding: 20px; margin-top: 8px; }
        .footer { padding: 20px 32px; border-top: 1px solid #eee; font-size: 12px; color: #999; }
        .source { display: inline-block; background: #eb8a00; color: #fff; font-size: 12px; padding: 3px 10px; border-radius: 12px; }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <img src="https://pechplan.nl/images/PechPlan-logo-vector-WO.svg" alt="PechPlan">
        </div>
        <div class="body">
            <h2 style="margin: 0 0 24px 0; color: #1d1d1b;">Nieuw contactformulier</h2>

            <div class="label">Naam</div>
            <div class="value">{{ $data['name'] ?? '-' }}</div>

            @if(!empty($data['company']))
            <div class="label">Bedrijfsnaam</div>
            <div class="value">{{ $data['company'] }}</div>
            @endif

            <div class="label">E-mailadres</div>
            <div class="value"><a href="mailto:{{ $data['email'] }}" style="color: #eb8a00;">{{ $data['email'] }}</a></div>

            @if(!empty($data['phone']))
            <div class="label">Telefoonnummer</div>
            <div class="value"><a href="tel:{{ $data['phone'] }}" style="color: #eb8a00;">{{ $data['phone'] }}</a></div>
            @endif

            <div class="label">Bericht</div>
            <div class="message-box">{{ $data['message'] }}</div>

            <div style="margin-top: 24px;">
                <span class="source">Via {{ $data['source'] ?? 'pechplan.nl' }}</span>
            </div>
        </div>
        <div class="footer">
            Dit bericht is verstuurd via het contactformulier op pechplan.nl
        </div>
    </div>
</body>
</html>
