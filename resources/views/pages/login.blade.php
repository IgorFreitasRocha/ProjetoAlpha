@extends('layouts.app')
@section('content')
@include('partials.head')

<div class="login-body">
  <div class="bg-gray-800 flex rounded-lg shadow-lg w-3/4 max-w-4xl">
    <!-- Seção da Imagem -->
    <div class="w-1/2 p-8">
      <img src="https://s2-techtudo.glbimg.com/QtBaHstq5qBnbqg3SLoxnG6P86Q=/0x0:1500x1000/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2023/2/B/impjTASBiNoC8reeRNag/circuit-cyberspace-closeup-with-neon-lights.jpg" alt="Imagem de Login" class="w-full h-full object-cover">
    </div>
    <!-- Linha de Separação -->
    <div class="w-0.5 bg-gray-700"></div>
    <!-- Seção de Login -->
    <div class="w-1/2 p-8 flex flex-col justify-center">
      <h2 class="text-green-500 text-3xl mb-6">Faça seu login</h2>
      <form action="#" method="POST" class="space-y-4">
        <div>
          <label for="email" class="sr-only">Email</label>
          <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required class="w-full p-3 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <div>
          <label for="password" class="sr-only">Senha</label>
          <input type="password" id="password" name="password" placeholder="Digite sua senha" required class="w-full p-3 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <div class="flex justify-between text-sm text-gray-400">
          <a href="#" class="hover:underline">Esqueceu a senha?</a>
          <a href="#" class="hover:underline">Registre-se</a>
        </div>
        <button type="submit" class="w-full py-3 bg-green-500 text-white rounded hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Entrar</button>
      </form>
    </div>
  </div>
</div>
@endsection