@extends('welcome')
@section('content')
<body>
  @if (session('error'))
  <div class="alert alert-danger">
      <Script>
      swal("Transaksi Gagal",{icon: "error",});
      </Script>
  </div>
@elseif (session('success'))
  <Script>
      swal("Transaksi Berhasil", {icon: "success",});
  </Script>

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
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Transaksi</li>
                  </ol>
                  <h6 class="mb-0 font-bold capitalize">Transaksi</h6>
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
                      <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent"  href="/transaksi/create">Tambah Transaksi</a>
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
        </main>
        <div class="flex flex-wrap-mx-3 mt-2">
            <div class="w-full max-w-full mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 ">
                <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                    <h5>Tambah Transaksi</h5>
                </div>
                <div class="flex-auto p-6">
                    <form role="form text-left" action="/transaksi/store" method="POST">
                        @csrf
                    <div class="mb-4">
                        <select name="konsumen" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" >
                            <option  disabled selected>Pilih Konsumen</option>
                            @foreach ($konsumen as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <select name="barang" id="barang" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                            <option disabled selected>Pilih Barang</option>
                            @foreach ($barang as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                      <h5>Jumlah : </h5>
                        <input type="number" placeholder="Jumlah" required name="jumlah" id="jumlah" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                    </div>
                    <div class="mb-4">
                      <h5>Harga  : </h5>
                        <input type="number" placeholder="total harga" required name="harga" id="harga" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
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
    </div>
    <script>
    
      document.getElementById('barang').addEventListener('change', (e) =>{
          console.log(e.target.value)
          document.getElementById('harga').value = 0
          document.getElementById('jumlah').value = 0
          fetch('/api/barang/'+e.target.value)
          .then(response => response.json())
          .then(data => {
              // Process the retrieved data
              let harga = data.harga
              console.log(harga);
              document.getElementById('jumlah').addEventListener('input', (e) =>{ 
                  let total = e.target.value * harga
                  document.getElementById('harga').value = total
              })
          })
          .catch(error => {
              // Handle any errors that occurred during the request
              console.error('Error:', error);
          });
          
      })
    </script>
</body>
@endsection