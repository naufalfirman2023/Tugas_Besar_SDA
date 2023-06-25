@extends('welcome')
@section('content')
<body>  
    {{-- <h1>form input barang</h1> --}}
    @if (session('error'))
        <div class="alert alert-danger">
            <Script>
            swal("Data barang dan nomor SKU","Sudah terdaftar sebelumnya",{button: "OK",icon: "error",});
            </Script>
        </div>
    @elseif (session('success'))
        <Script>
            swal("Data stok barang berhasil ditambahkan", {button: "OK",icon: "success",});
        </Script>

    @endif
    {{-- <form action="/barang/store" method="POST">
    @csrf
    <input type="number" placeholder="sku" required name="sku"><br>
    <input type="text" placeholder="nama" required name="nama"><br>
    <input type="number" placeholder="harga" required name="harga"><br>
    <input type="number" placeholder="stok" required name="stok"><br>

    <button type="submit">simpan</button>
    </form> --}}
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
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Tambah Barang</li>
                  </ol>
                  <h6 class="mb-0 font-bold capitalize">Tambah Barang</h6>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap-mx-3 mt-2">
        <div class="w-full max-w-full mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 ">
            <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                <h5>Tambah Barang</h5>
            </div>
            <div class="flex-auto p-6">
                <form role="form text-left" action="/barang/store" method="POST">
                    @csrf
                    <div class="mb-4">
                        <input type="number" placeholder="sku" required name="sku" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="nama" required name="nama" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                    </div>
                    <div class="mb-4">
                        <input type="number" placeholder="harga" required name="harga" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                    </div>
                    <div class="mb-4">
                        <input type="number" placeholder="stok" required name="stok" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                    </div>
                
                <div class="text-center">
                    <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Tambah</button>
                </div>
                </form>
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
