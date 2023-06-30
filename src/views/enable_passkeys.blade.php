<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enable Passkeys</title>
    </head>
    
    <body>

        <h2>Click The button below to enable Passkeys for your account</h2>

        <button id="passage_register">Enable Passkey</button>

        <h1>{{ auth()->user()->email }}</h1>

        <script type="module">

            import {Passage} from "https://cdn.passage.id/passage-js.js"

            const passage = new Passage("{{ env('PASSAGE_APP_ID') }}");

            window.onclick = async function registerPasskey() {

                // Create a passage user using the current logged in user's email
                try {
                    const passageUser = passage.register('{{ auth()->user()->email }}');
                    
                    alert('Request sent successfully, Login with passwordless channel to confirm Passkey registeration');

                } catch (e) {
                    // An error can be raised for one of the following reasons:
                    // 1. User Device does not support webauthn
                    // 2. User cancels the register passkey flow
                    // 3. Network request error

                    console.log(e);
                }
                
                // Show user has successfully been registered
                //alert('user has successfully been registered');
            }

            document.getElementById("passage_register").addEventListener("click", register_passkey);
            
        </script>

    </body>
</html>