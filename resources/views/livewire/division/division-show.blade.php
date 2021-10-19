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
                        <i class="w-4 h-4 mr-2" data-feather="user"></i> Manager : {{ $division->manager->name }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i class="w-4 h-4 mr-2" data-feather="users"></i>Count Users : {{ $division->users_count }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i class="w-4 h-4 mr-2" data-feather="activity"></i>Last Activity At : {{ $division->updated_at->diffForHumans() }}
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 dark:border-dark-5 pt-5 lg:pt-0">
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
            <a wire:click="openTab('users-list')" id="profile-tab" data-toggle="tab" href="javascript:;" class="py-4 sm:mr-8 flex items-center {{ $div_tab === 'users-list' ? 'active' : '' }}" role="tab" aria-controls="profile" aria-selected="true">
                <i class="w-4 h-4 mr-2" data-feather="users"></i> Users List
            </a>
            <a wire:click="openTab('lastest-work')" id="profile-tab" data-toggle="tab" href="javascript:;" class="py-4 sm:mr-8 flex items-center {{ $div_tab === 'lastest-work' ? 'active' : '' }}" role="tab" aria-controls="profile" aria-selected="true">
                <i data-feather="briefcase" class="w-4 h-4 mr-2"></i> Lastest Work
            </a>
            <a wire:click="openTab('closest-schedule')" id="account-tab" data-toggle="tab" href="javascript:;" class="py-4 sm:mr-8 flex items-center" role="tab" aria-selected="false">
                <i data-feather="calendar" class="w-4 h-4 mr-2"></i> Closest Schedule
            </a>
            <a wire:click="openTab('lastest-schedule')" id="change-password-tab" data-toggle="tab" href="javascript:;" class="py-4 sm:mr-8 flex items-center" role="tab" aria-selected="false">
                <i data-feather="file" class="w-4 h-4 mr-2"></i>Lastest Content
            </a>
            <a wire:click="openTab('edit')" id="settings-tab" data-toggle="tab" href="javascript:;" class="py-4 sm:mr-8 flex items-center" role="tab" aria-selected="false">
                <i data-feather="edit" class="w-4 h-4 mr-2"></i>Edit
            </a>
        </div>
    </div>
@if ($div_tab === 'users-list')
    @livewire('division.division-users-list', ['users' => $division->users])
@elseif($div_tab === 'lastest-work')
    @livewire('division.division-lastest-work')
@endif
</div>
