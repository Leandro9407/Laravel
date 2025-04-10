<div>
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <form wire:submit.prevent="save">
            <div class="mb-4">
                <x-label>
                    Nombre
                </x-label>
                <x-input class="w-full" wire:model="postCreate.title"></x-input>

                <x-input-error for="postCreate.title"/>

            </div>

            <div>
                <x-label>
                    Contenido
                </x-label>
                <x-textarea class="w-full" wire:model="postCreate.content"></x-textarea>
                <x-input-error for="postCreate.content"/>
                <div>
                    <x-label>
                        Categoria
                    </x-label>
                    <x-select class="w-full" wire:model="postCreate.category_id">
                        
                        <option value="" disabled>
                            Selecione una categoria
                        </option>
                        
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>        
                        @endforeach
                    </x-select>
                    <x-input-error for="postCreate.category_id"/>
                    <div class="mb-4">
                        <x-label>
                            Etiquetas
                        </x-label>
                        <ul>
                            @foreach ($tags as $tag)
                            <li>
                                <x-checkbox wire:model="selectTags" value="{{$tag->id}}"/>
                                    {{$tag->name}}
                            </li>
                            @endforeach
                        </ul>
                        <x-input-error for="selectTags"/>
                    </div>
                    <div class="flex justify-end">
                        <x-button>
                            Crear
                        </x-button>
                    </div>            
                </div>
            </div>
        </form>
    </div>

    <div class="bg-white shadow rounded-lg p-6 mt-4">
        <ul class="list-disc list-inside space-y-2">
            @foreach($posts as $post)
        <li class="flex justify-between" 
        wire:key="post-{{$post->id}}">
            {{$post->title}}

            <div>
                <x-button wire:click="edit({{$post->id}})">
                    Editar
                </x-button>
                <x-danger-button wire:click="destroy({{$post->id}})">
                    Eliminar
                </x-danger-button>        
            </div>
        </li>       
            @endforeach
        </ul>
    </div>

    {{-- formulario de edicion --}}

    <form wire:submit="update">
    <x-dialog-modal wire:model="open">
   |  
        <x-slot name="title">
            Crear nuevo post
        </x-slot>
        <x-slot name="content">
            
            <div class="mb-4">
                <x-label>
                    Nombre
                </x-label>
                <x-input class="w-full"
                wire:model="postEdit.title"
                required>
                
                </x-input>
            </div>
            <div>
                <x-label>
                    Contenido
                </x-label>
                <x-textarea class="w-full" wire:model="postEdit.content"></x-textarea>
                <div>
                    <x-label>
                        Categoria
                    </x-label>
                    <x-select class="w-full" wire:model="postEdit.category_id">
                        
                        <option value="" disabled>
                            Selecione una categoria
                        </option>

                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>         
                        @endforeach
                    </x-select>
                    <div class="mb-4">
                        <x-label>
                            Etiquetas
                        </x-label>
                        <ul>
                            @foreach($tags as $tag)
                            <li>
                                <x-checkbox wire:model="postEdit.tags" value="{{$tag->id}}"/>
                                {{$tag->name}}
                                
                            </li>          
                            @endforeach
                        </ul>    
                    </div>    
                </div>    
            </div>
        </x-slot>

        <x-slot name="footer">
            <div class="flex justify-end">
                <x-danger-button class="mr-2"
                wire:click="$set('open', false)">
                    Cancelar
                </x-danger-button>
                <x-button>
                    Actualizar
                </x-button>
            </div>   
        </x-slot>            
          
    </x-dialog-modal>
    </form>
</div>
