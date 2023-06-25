@extends('welcome')
@section('content')
    

<body>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <div class="m-0 font-sans antialiased font-normal text-base leading-default text-slate-500">
        <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl  transition-all duration-200">
          <!-- Navbar -->
          <nav class="relative flex flex-wrap items-center justify-between px- py-6 mx-0  transition-all shadow-soft-xl duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
              <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                  <li class="leading-normal text-sm">
                    <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                  </li>
                  <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Barang</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize">Barang</h6>
              </nav>
    
              <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center md:ml-auto md:pr-4">
                  <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                      <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                  </div>
                </div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                  <!-- online builder btn  -->
                  <li class="flex items-center">
                    <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="" href="/barang/create">Tambah Barang</a>
                  </li>
                  <li class="flex items-center pl-4 xl:hidden">
                    <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                      <div class="w-4.5 overflow-hidden">
                        <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                        <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                        <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                      </div>
                    </a>
                  </li>
                  <li class="flex items-center px-4">
                    <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
                      <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                      <!-- fixed-plugin-button-nav  -->
                    </a>
                  </li>
    
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!-- table 1 -->

        <div class="flex flex-wrap-mx-3 mt-2">
            <div class="flex-none w-full max-w-full px-0">
              <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <h6>Tabel Barang</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                  <div class="p-0 overflow-x-auto">
                    <table class="table-fixed">
                        <thead class="align-bottom">
                            <tr>
                                <th class="w-1/1 px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap opacity-70">Nomor</th>
                                <th class="w-1/1 px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap opacity-70">SKU</th>
                                <th class="w-1/2 px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama Barang</th>
                                <th class="w-1/4 px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Harga Barang</th>
                                <th class="w-1/4 px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Stok</th>
                                <th class="w-1/2 px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $b)
                                       
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                    <div class="text-center justify-center">
                                        <h6 class=" mb-0 text-sm leading-normal">{{ $loop->iteration }}</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                    <div class="text-center justify-center">
                                        <h6 class=" mb-0 text-sm leading-normal">000{{ $b->id }}</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                    <div class="text-left justify-center">
                                        <h6 class=" mb-0 text-sm leading-normal">{{ $b->nama }}</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                    <div class="text-left justify-center">
                                        <h6 class=" mb-0 text-sm leading-normal">Rp.{{ number_format($b->harga,2,',','.') }}</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                    <div class="text-left justify-center">
                                        <h6 class=" mb-0 text-sm leading-normal">{{ $b->stok }}</h6>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                    <div class="text-left justify-center">
                                        <a href="/barang/{{ $b->id }}/restok">
                                          <button type="submit" class="inline-block w-full px-1 py-1 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Restock</button>

                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
              <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                  <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                    ©
                    <script>
                      document.write(new Date().getFullYear() + ",");
                    </script>
                    made with <i class="fa fa-heart"></i> by
                    <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                    for a better web.
                  </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                  <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </div>
    </main>
</div>
</body>
@endsection