<x-app-layout>
     {{-- <x-slot name="header">
          {{__('Dashboard')}}
     </x-slot> --}}
     <div class="px-4 py-2">
@livewire('comps.dash-stats')
     </div>
     <div class="px-4 py-2">
          @livewire('comps.dash-charts')
               </div>
</x-app-layout>

