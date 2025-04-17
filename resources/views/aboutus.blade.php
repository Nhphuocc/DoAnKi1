@extends('layout')
<title>Contact Us</title>
@section('content')

<div id="header">
    <div class="inner">
        <!-- Thay thế div inner bằng form contact ở đây -->
        <div class="flex items-center min-h-screen bg-gray-900">
          <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10 bg-gray-800 p-5 rounded-md shadow-sm">
              <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-100">
                  Contact Us
                </h1>
                <p class="text-gray-400 dark:text-gray-400">
                  Fill up the form below to send us a message.
                </p>
              </div>
              <div class="m-7">
                <form action="https://api.web3forms.com/submit" method="POST" id="form">
                  <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
                  <input type="hidden" name="subject" value="New Submission from Web3Forms" />
                  <input type="checkbox" name="botcheck" id="" style="display: none;" />

                  <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm text-gray-400">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 h-12 rounded-sm placeholder-gray-500 text-gray-900 bg-gray-100 text-sm focus:outline-none" />
                  </div>
                  <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm text-gray-400">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="you@company.com" required class="w-full px-3 py-2 h-12 rounded-sm placeholder-gray-500 text-gray-900 bg-gray-100 text-sm focus:outline-none" />
                  </div>
                  <div class="mb-6">
                    <label for="phone" class="block mb-2 text-sm text-gray-400">Phone Number</label>
                    <input type="text" name="phone" id="phone" placeholder="+1 (555) 1234-567" required class="w-full px-3 py-2 h-12 rounded-sm placeholder-gray-500 text-gray-900 bg-gray-100 text-sm focus:outline-none" />
                  </div>
                  <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm text-gray-400">Your Message</label>

                    <textarea rows="5" name="message" id="message" placeholder="Your Message" class="w-full px-3 py-2 rounded-sm placeholder-gray-500 text-gray-900 bg-gray-100 text-sm focus:outline-none" required></textarea>
                  </div>
                  <div class="mb-6">
                    <button type="submit" class="w-full bg-indigo-600 inline-block text-white no-underline hover:text-indigo-100 py-4 px-4 rounded-sm focus:outline-none">
                      Send Message
                    </button>
                  </div>
                  <p class="text-base text-center text-gray-400" id="result"></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <nav id="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li>
                <a href="#">Categories</a>
                <ul>
                    <li><a href="#">Face</a></li>
                    <li><a href="#">Body</a></li>
                    <li><a href="#">Suncreen</a></li>
                    <li><a href="#">Hair</a></li>
                    <li><a href="#">MakeUp</a></li>
                    <li>
                        <a href="#">Perfumes</a>
                    </li>
                </ul>
            </li>
            <li><a href="/AboutUs">Contact</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
</div>
@endsection

