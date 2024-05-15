<x-guest-layout>
    <div class="container">
        <div class="heading">Register</div>
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf

            <!-- Student ID/Company ID -->
            <input id="id_number" name="id_number" type="text" class="input" placeholder="Student ID/Company ID" :value="old('id_number')" required autofocus />

            <!-- Fullname -->
            <input id="fullname" name="fullname" type="text" class="input" placeholder="Fullname" :value="old('fullname')" required />

            <!-- Username -->
            <input id="username" name="username" type="text" class="input" placeholder="Username" :value="old('username')" required />

            <!-- Birthdate -->
            <input id="birthdate" name="birthdate" type="date" class="input" :value="old('birthdate')" required />

            
<!-- User Type -->
<div class="radio-group">
    <label for="user_type" style="margin-top: 10px;">User Type</label>
    <div class="radio-buttons">
        <label>
            <input type="radio" name="user_type" value="student" required>
            Student
        </label>
        <label>
            <input type="radio" name="user_type" value="teacher" required>
            Teacher
        </label>
        <label>
            <input type="radio" name="user_type" value="staff" required>
            Staff
        </label>
    </div>
</div>



            <!-- Password -->
            <input id="password" name="password" type="password" class="input" placeholder="Password" required />

            <!-- Confirm Password -->
            <input id="password_confirmation" name="password_confirmation" type="password" class="input" placeholder="Confirm Password" required />

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
