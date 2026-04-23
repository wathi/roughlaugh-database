<x-layout>
    <h1 class="text-2xl font-bold text-center mb-2">問い合わせ</h1>
    <h2 class="text-xl text-center mb-8">CONTACT</h2>
    {{-- <div class="wp-content">
    {!! $page['content']['rendered'] !!}
    </div> --}}

    <div class="max-w-2xl mx-auto">
        <section class="mb-16">
            <p class="mb-4">
                情報提供、訂正、ご意見、ご感想など、下記のフォームよりご連絡をお願いいたします。<br />
                もしくは管理人まで。<br />
                <a class="twitter-follow-button" href="https://twitter.com/wa_rldb"><br /></a>
                <script async src="https://platform.twitter.com/widgets.js"></script>
            </p>
            <p class="mb-4">
                For information, correction or any questions, please submit the contact form, or contact administrator directly.<br />
                <a class="twitter-follow-button" href="https://twitter.com/wa_rldb"><br /></a>
                <script async src="https://platform.twitter.com/widgets.js"></script>
            </p>
        </section>
<section class="hidden">
    <form method="POST" action="{{ route('contactform') }}" class="space-y-4">
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
                送信 (Send)
            </button>
        </div>
    </form>

<div>
</x-layout>