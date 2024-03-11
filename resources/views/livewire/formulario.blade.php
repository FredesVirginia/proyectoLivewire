<div class=" flex flex-col space-y-10">
   <div class="bg-white shadow rounded-lg p-6">
    <form wire:submit="save">  
       <div class="mb-4">
        <x-label>
            Nombre
        </x-label>
        <x-input class="w-full" wire:model="title" required/>

       </div>

       <div class="mb-4">
          <x-label>
            Contenido
          </x-label>
         <x-textarea class="w-full" wire:model="content" required>
         </x-textarea>  

       </div>

       <div class="mb-4">
         <x-label>
            Cateroria
         </x-label>

         <x-select required class="w-full" wire:model="category_id">
            
            <option disabled>
               Seleciona una catoria
            </option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">
                  {{$category->name}}
                </option>
            @endforeach
         </x-select>
       </div>


       <div class="mb-4">
         <x-label>
            Etiqueta
         </x-label>

         <ul>
            @foreach ($tags as $tag)
             <li>
               <label>
                  <x-checkbox wire:model="selectedTags" value="{{$tag->id}}"/>
                  {{$tag->name}}
               </label>
             </li>

            @endforeach
         </ul>
       </div>


       <div class="flex justify-end">
         <x-button>
            Crear
         </x-button>
       </div>
    </form>
   </div>


   <div class="  bg-white shadow rounded-lg p-6 px-16">
        
      <ul class="list-disc list-outside">
         @foreach ($posts as $post)
            <li>
               {{$post->title}}
            </li>
         @endforeach
      </ul>

   </div>
</div>
