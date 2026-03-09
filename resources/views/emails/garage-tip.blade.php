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
        .cta-box { background: #fff8f0; border: 1px solid #eb8a00; border-radius: 8px; padding: 20px; margin-top: 24px; }
        .cta-box h3 { color: #eb8a00; margin: 0 0 8px 0; font-size: 16px; }
        .cta-box p { margin: 0; font-size: 14px; color: #555; }
        .footer { padding: 20px 32px; border-top: 1px solid #eee; font-size: 12px; color: #999; }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <img src="https://pechplan.nl/images/PechPlan-logo-vector-WO.svg" alt="PechPlan">
        </div>
        <div class="body">
            <h2 style="margin: 0 0 8px 0; color: #1d1d1b;">Een klant wil PechPlan via uw garage</h2>
            <p style="color: #666; margin: 0 0 24px 0;">Onderstaande klant heeft interesse in PechPlan en heeft u als voorkeursgarage opgegeven.</p>

            <div class="label">Klant</div>
            <div class="value">{{ $data['user_name'] }}</div>

            <div class="label">E-mailadres klant</div>
            <div class="value"><a href="mailto:{{ $data['user_email'] }}" style="color: #eb8a00;">{{ $data['user_email'] }}</a></div>

            <div class="label">Garage / autobedrijf</div>
            <div class="value">{{ $data['garage_name'] }}</div>

            <div class="label">Bericht van de klant</div>
            <div class="message-box">{!! nl2br(e($data['message'])) !!}</div>

            <div class="cta-box">
                <h3>Bied PechPlan aan via uw garage</h3>
                <p>Steeds meer garages sluiten zich aan bij PechPlan om hun klanten pechhulp te bieden via hun eigen garage. De onboarding is eenvoudig en snel geregeld.</p>
                <p style="margin-top: 12px;">Neem contact op met PechPlan via <a href="mailto:info@pechplan.nl" style="color: #eb8a00; font-weight: bold;">info@pechplan.nl</a> of bel <a href="tel:0882474700" style="color: #eb8a00; font-weight: bold;">088 247 47 00</a> om de mogelijkheden te bespreken.</p>
            </div>
        </div>
        <div class="footer">
            Dit bericht is verstuurd via pechplan.nl namens {{ $data['user_name'] }}
        </div>
    </div>
</body>
</html>
