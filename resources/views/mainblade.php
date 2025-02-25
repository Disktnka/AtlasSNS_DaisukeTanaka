<header class="bg-blue-500 text-white p-4 flex justify-between items-center" href="{{ route('main') }}" >
    <!-- ロゴをクリックでトップページへ遷移 -->
        <button @click="open = !open" class="flex items-center space-x-2 p-2 bg-blue-500 text-white rounded-lg">
            <span>{{ isset($user) ? $user->name : 'ゲスト' }} さん</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        <!-- アコーディオンメニュー -->
        <div x-show="open" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg overflow-hidden z-10">
            <a href="{{ route('main') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">トップページ</a>
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">プロフィール編集</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-200">ログアウト</button>
            </form>
        </div>
    </div>
</header>
