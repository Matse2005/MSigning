<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/includes/functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MSigning</title>
  <!-- Tailwind CSS - Output file -->
  <link rel="stylesheet" href="/assets/css/output.css">
</head>

<body class="min-h-screen">
  <header class="absolute w-full h-8 transition lg:h-12">
    <nav class="container m-auto lg:px-20">
      <div class="relative flex flex-wrap items-center justify-between">
        <div class="relative z-10 w-full px-6 flex items-center justify-between lg:w-auto">
          <a href="" class="text-lg font-bold">
            <!-- <img src="public/images/logo.svg" class="w-32" alt="tailus logo"> -->
            MSigning
          </a>

          <button id="hamburger" class="relative w-10 h-10 lg:hidden">
            <div role="hidden" id="line" class="inset-0 w-6 h-0.5 m-auto rounded-full bg-gray-500 transition duration-300"></div>
            <div role="hidden" id="line2" class="inset-0 w-6 h-0.5 mt-1.5 m-auto rounded-full bg-gray-500 transition duration-300"></div>
          </button>
        </div>

        <div id="navlinks" class="hidden w-full px-6 bg-white transition lg:block lg:w-auto lg:px-0 lg:bg-transparent">
          <ul class="py-4 text-gray-600 text-md tracking-wide lg:flex lg:space-x-8 lg:py-0">
            <li>
              <a href="" class="block w-full py-3 transition hover:text-cyan-600">Portfolio</a>
            </li>
            <li>
              <a href="" class="block w-full py-3 transition hover:text-cyan-600">Services</a>
            </li>
            <li>
              <a href="" class="block w-full py-3 transition hover:text-cyan-600">About</a>
            </li>
            <li>
              <a href="" class="block w-full py-3 transition hover:text-cyan-600">Blog</a>
            </li>
            <li class="mt-4 lg:mt-0">
              <a href="" class="block w-full py-3 transition">
                <span class="block text-center font-semibold lg:text-base">Contact us</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>