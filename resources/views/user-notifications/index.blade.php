<x-tomato-admin-layout>
    <x-slot:header>
        {{ trans('tomato-notifications::global.notifications.title') }}
    </x-slot:header>
    <x-slot:buttons>
        <x-tomato-admin-button :modal="true" :href="route('admin.user-notifications.create')" type="link">
            {{trans('tomato-admin::global.crud.create-new')}} {{ trans('tomato-notifications::global.notifications.single') }}
        </x-tomato-admin-button>
        <x-tomato-admin-button :href="route('admin.settings.notifications.index')" type="link">
            {{  trans('tomato-notifications::global.settings.title') }}
        </x-tomato-admin-button>
        <x-tomato-admin-button :href="route('admin.notifications-logs.index')" type="link">
            {{  trans('tomato-notifications::global.notifications.log') }}
        </x-tomato-admin-button>
    </x-slot:buttons>


    <div class="pb-12" v-cloak>
        <div class="mx-auto">
            <x-splade-table :for="$table" striped>
                <x-splade-cell actions>
                    <div class="flex justify-start">
                        <x-tomato-admin-button confirm :title="trans('tomato-notifications::global.notifications.resend')" :href="route('admin.user-notifications.resend', $item->id)" type="icon">
                            <x-heroicon-s-arrow-path class="h-6 w-6"/>
                        </x-tomato-admin-button>
                        <x-tomato-admin-button modal success :title="trans('tomato-admin::global.crud.view')" :href="route('admin.user-notifications.show', $item->id)" type="icon">
                            <x-heroicon-s-eye class="h-6 w-6"/>
                        </x-tomato-admin-button>
                        <x-tomato-admin-button
                            confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                            confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                            confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                            cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                            class="px-2 text-red-500"
                            method="delete"
                            danger :title="trans('tomato-admin::global.crud.delete')" :href="route('admin.user-notifications.destroy', $item->id)" type="icon">
                            <x-heroicon-s-trash class="h-6 w-6"/>
                        </x-tomato-admin-button>
                    </div>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-tomato-admin-layout>
