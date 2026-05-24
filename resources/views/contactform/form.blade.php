
            @if ($errors->any())
            <div class="alert alert-error mb-4">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
            @endif

            <form method="POST" action="{{ route('contactform.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block font-medium text-gray-700 mb-1">お名前 Name</label>
                    <input type="text" name="name" id="name" required class="p-2 mb-2 block w-full border-gray-300">
                </div>
                <div>
                    <label for="email" class="block font-medium text-gray-700 mb-1">メールアドレス Email</label>
                    <input type="email" name="email" id="email" required class="p-2 mb-2 block w-full border-gray-300">
                </div>
                <div>
                    <label for="twitter" class="block font-medium text-gray-700 mb-1">X (Twitter)</label>
                    <input type="text" name="twitter" id="twitter" class="p-2 mb-2 block w-full border-gray-300">
                </div>
                <div>
                    <label for="message" class="block font-medium text-gray-700 mb-1">メッセージ Message</label>
                    <textarea name="message" id="message" rows="4" required class="p-2 mb-2 block w-full border-gray-300"></textarea>
                </div>
                <div>
                    <button type="submit" class="py-2 px-4 text-white bg-gray-600 hover:bg-gray-500 hover:cursor-pointer">
                        Send
                    </button>
                </div>
            </form>