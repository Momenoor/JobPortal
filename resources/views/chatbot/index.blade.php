@extends('layouts.app')

@section('main')
    <body>
    <section class="section-4 bg-2">
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Chatbot</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card border-0 shadow mb-4">
                <div class="card-body card-form">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="fs-4 mb-1">Job Interview Chatbot</h3>
                        </div>
                    </div>

                    <div id="chat-box">
                        <div id="messages"></div>
                        <input type="text" id="user-input" placeholder="Type your message here...">
                        <button onclick="sendMessage()">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const sendMessage = async () => {
            const userMessage = document.getElementById('user-input').value;

            if (!userMessage) {
                alert("Please type a message.");
                return;
            }

            try {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                const response = await fetch('{{ route('chat') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify({ message: userMessage }),
                });

                if (!response.ok) {
                    const errorData = await response.json();
                    throw new Error(errorData.error);
                }

                const data = await response.json();
                const messageBox = document.getElementById('messages');
                messageBox.innerHTML += `<p>User: ${userMessage}</p><p>Bot: ${data.response}</p>`;
                document.getElementById('user-input').value = ''; // Clear input box

            } catch (error) {
                console.error('Error:', error.message);
            }
        };
    </script>
    </body>
@endsection
