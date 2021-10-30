<div>
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
            <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="text-large text-center lg:text-left lg:mt-3"><h1>{{ Str::title($division->name) }}</h1></div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                         {{ $division->description }}
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                        <span wire:ignore><i class="w-4 h-4 mr-2" data-feather="user"></i> Manager : {{ $division->manager->name }}</span>
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <span wire:ignore><i class="w-4 h-4 mr-2" data-feather="users"></i>Count Users : {{ $division->users_count }}</span>
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <span wire:ignore><i class="w-4 h-4 mr-2" data-feather="activity"></i>Last Activity At : {{ $division->updated_at->diffForHumans() }} </span>
                    </div>
                </div>
            </div>
            <div wire:ignore class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 dark:border-dark-5 pt-5 lg:pt-0">
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-theme-1 dark:text-theme-10 text-xl">{{ $division->projects_count }}</div>
                    <div class="text-gray-600">Projects</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-theme-1 dark:text-theme-10 text-xl">1k</div>
                    <div class="text-gray-600">Tasks</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-theme-1 dark:text-theme-10 text-xl">{{ $division->announcements_count }}</div>
                    <div class="text-gray-600">Announcements</div>
                </div>
            </div>
        </div>
        <div class="nav nav-tabs flex-col sm:flex-row justify-center lg:justify-start" role="tablist">
            <button type="button" wire:click="$emit('openTab', 'users-list')" id="profile-tab" data-toggle="tab" class="py-4 sm:mr-8 flex items-center {{ $tab === 'users-list' ? 'active' : '' }}" role="tab" aria-controls="profile" aria-selected="true">
                <span wire:ignore><i class="w-4 h-4 mr-2" data-feather="users"></i> Users List </span>
            </button>
            <a role="button" type="button" wire:click="$emit('openTab', 'lastest-work')" id="profile-tab" data-toggle="tab" class="py-4 sm:mr-8 flex items-center {{ $tab === 'lastest-work' ? 'active' : '' }}" role="tab" aria-controls="profile" aria-selected="true">
                <span wire:ignore><i data-feather="briefcase" class="w-4 h-4 mr-2"></i> Lastest Work </span>
            </a>
            <a wire:click="$emit('openTab', 'closest-schedule')" id="account-tab" data-toggle="tab" href="javascript:;" class="py-4 sm:mr-8 flex items-center {{ $tab === 'closest-schedule' ? 'active' : '' }}" role="tab" aria-selected="false">
                <span wire:ignore><i data-feather="calendar" class="w-4 h-4 mr-2"></i> Closest Schedule</span>
            </a>
            <a wire:click="$emit('openTab', 'lastest-content')" id="change-password-tab" data-toggle="tab" href="javascript:;" class="py-4 sm:mr-8 flex items-center {{ $tab === 'lastest-content' ? 'active' : '' }}" role="tab" aria-selected="false">
                <span wire:ignore><i data-feather="file" class="w-4 h-4 mr-2"></i>Lastest Content</span>
            </a>
            <a wire:click="$emit('openTab', 'edit')" id="settings-tab" data-toggle="tab" href="javascript:;" class="py-4 sm:mr-8 flex items-center {{ $tab === 'edit' ? 'active' : '' }}" role="tab" aria-selected="false">
                <span wire:ignore><i data-feather="edit" class="w-4 h-4 mr-2"></i>Edit</span>
            </a>
        </div>
    </div>
@if ($tab === 'users-list')
    @livewire('division.division-users-list', ['users' => $division->users])
@elseif($tab === 'lastest-work')
    @livewire('division.division-lastest-work', ['division' => $division])
@elseif ($tab === 'closest-schedule')
    @livewire('division.division-closest-schedule', ['division' => $division])
@elseif ($tab === 'lastest-content')
    @livewire('division.division-lastest-content', ['division' => $division])
@elseif ($tab === 'edit')
    @livewire('division.division-edit', ['division' => $division])
@endif
</div>
