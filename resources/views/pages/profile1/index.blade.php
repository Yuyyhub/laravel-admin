@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="Page Bingung" />
    <div class="min-h-screen rounded-2xl border border-gray-200 bg-white px-5 py-7 dark:border-gray-800 dark:bg-white/[0.03] xl:px-10 xl:py-12">
        <div class="mx-auto w-full max-w-[630px] text-center">
            <h3 class="mb-4 font-semibold text-gray-800 text-theme-xl dark:text-white/90 sm:text-2xl">
                Ga Tau Apa Ya Ini
            </h3>

            <p class="text-sm text-gray-500 dark:text-gray-400 sm:text-base">
                Isi Cok Jangan Kosong Doangan blog
            </p>


            <a class="group block h-full animate-in slide-in-from-bottom-12 fade-in duration-1000 delay-150" href="/profile">
                <div class="relative h-full flex flex-col p-8 bg-white/70 dark:bg-gray-900/70 backdrop-blur-2xl border border-gray-200/60 dark:border-gray-800/60 rounded-[2.5rem] hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-700 hover:-translate-y-2 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/5 to-cyan-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                <div class="relative z-10 flex flex-col h-full">
                    <div class="flex items-center justify-between mb-6">…</div>
                    <div class="p-4 rounded-[1.5rem] bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/30 dark:to-cyan-900/30 text-blue-600 dark:text-blue-400 shadow-inner group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                            <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,
                            3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.
                            22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.
                            5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"></path>
                            </svg>
                            </div>
                            <div class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-800 flex items-center justify-center bg-white/50 dark:bg-gray-800/50 text-gray-400 group-hover:text-brand-500 group-hover:border-brand-500/50 group-hover:bg-brand-50 dark:group-hover:bg-brand-500/10 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-500">\
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-500">
                                        <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                                    </svg>
</div>
                </div>
                <div class="mt-auto">
                    <h3 class="text-2xl font-black text-gray-900 dark:text-white tracking-tight mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">User Profile</h3>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400 leading-relaxed">Human Trafficing.</p>
                </div>
                </div>
</div>
</a>




            </a>

            <a class="group block h-full animate-in slide-in-from-bottom-12 fade-in duration-1000 delay-100" href="/basic-tables">
                <div class="relative h-full flex flex-col p-8 bg-white/70 dark:bg-gray-900/70 backdrop-blur-2xl border border-gray-200/60 dark:border-gray-800/60 rounded-[2.5rem] hover:shadow-2xl hover:shadow-brand-500/20 transition-all duration-700 hover:-translate-y-2 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-600/5 to-indigo-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    <div class="flex-1 overflow-auto">
                        <div class="flex items-center justify-between mb-6">
                            <div class="p-4 rounded-[1.5rem] bg-gradient-to-br from-brand-100 to-indigo-100 dark:from-brand-900/30 dark:to-indigo-900/30 text-brand-600 dark:text-brand-400 shadow-inner group-hover:scale-110 transition-transform duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                                    <path d="M21,6H17V5a3,3,0,0,0-3-3H10A3,3,0,0,0,7,5V6H3A1,1,0,0,0,2,7v4a3,3,0,0,0,1,2.22V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V13.22A3,3,0,0,0,22
                                    ,11V7A1,1,0,0,0,21,6ZM9,5a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1V6H9ZM19,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V14H7v1a1,1,0,0,0,2,
                                    0V14h6v1a1,1,0,0,0,2,0V14h2Zm1-8a1,1,0,0,1-1,1H17V11a1,1,0,0,0-2,0v1H9V11a1,1,0,0,0-2,0v1H5a1,1,0,0,1-1-1V8H20Z"></path>
                                    </svg>
                            </div>
                            <div class="w-10 h-10 rounded-full border border-gray-200 dark:border-gray-800 flex items-center justify-center bg-white/50 dark:bg-gray-800/50 text-gray-400 group-hover:text-brand-500 group-hover:border-brand-500/50 group-hover:bg-brand-50 dark:group-hover:bg-brand-500/10 transition-all duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-500">
                                    <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <h2 class="text-2xl font-black text-gray-900 dark:text-white tracking-tight mb-3 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">Tables</h2>
                            <p class="text-sm font-medium text-gray-500 dark:text-gray-400 leading-relaxed">Human Trafficing.</p>
                        </div>
                    </div>
                </div>
            </a>

        <!-- <div class="flex-1 p-4 md:p-6 w-full relative flex flex-col justify-center overflow-hidden min-h-[calc(100vh-80px)] bg-gray-50 dark:bg-gray-950 selection:bg-brand-500/30">
            <div class="absolute top-0 inset-x-0 h-[500px] bg-gradient-to-b from-brand-600/10 to-transparent pointer-events-none"></div>
            <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-brand-500/10 blur-[120px] rounded-full mix-blend-screen pointer-events-none"></div>
            <div class="absolute -bottom-40 -left-40 w-[600px] h-[600px] bg-emerald-500/10 blur-[120px] rounded-full mix-blend-screen pointer-events-none"></div>
            <div class="absolute inset-0 bg-[url('/Mu.png')] opacity-[0.15] pointer-events-none mix-blend-overlay"></div>
            <div class="relative z-10 max-w-7xl mx-auto w-full pt-8">
            <div class="text-center mb-16 animate-in slide-in-from-bottom-8 fade-in duration-1000">…</div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto w-full">
                <a class="group block h-full animate-in slide-in-from-bottom-12 fade-in duration-1000 delay-100" href="/modules">
                    <div class="relative h-full flex flex-col p-8 bg-white/70 dark:bg-gray-900/70 backdrop-blur-2xl border border-gray-200/60 dark:border-gray-800/60 rounded-[2.5rem] hover:shadow-2xl hover:shadow-brand-500/20 transition-all duration-700 hover:-translate-y-2 overflow-hidden">
                        <div class="relative h-full flex flex-col p-8 bg-white/70 dark:bg-gray-900/70 backdrop-blur-2xl border border-gray-200/60 dark:border-gray-800/60 rounded-[2.5rem] hover:shadow-2xl hover:shadow-brand-500/20 transition-all duration-700 hover:-translate-y-2 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-brand-600/5 to-indigo-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                            <div class="relative z-10 flex flex-col h-full">…</div>
                    </div> -->
    </div>
@endsection
