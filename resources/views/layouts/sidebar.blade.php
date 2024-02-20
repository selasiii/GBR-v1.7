<div class="d-flex flex-column flex-shrink-0 p-3 position-fixed min-vh-100 z-2  bg-body-tertiary" style="width: auto; height: 100vh; overflow-y: auto;">
    <ul class="list-unstyled ps-0">

        <!-- Dashboard -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                Dashboard
            </button>
            <div class="collapse" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('dashboard') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                </ul>
            </div>
        </li>

        <!-- User Management -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#user-management-collapse" aria-expanded="false">
                User Management
            </button>
            <div class="collapse" id="user-management-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                    <!-- Users -->
                    <li class="mb-2 mt-1">
                        <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#users-collapse" aria-expanded="false">
                            Users
                        </button>
                        <div class="collapse" id="users-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

                                <!-- Admins -->
                                <li class="mb-2 mt-1">
                                    <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#admins-collapse" aria-expanded="false">
                                        Admins
                                    </button>
                                    <div class="collapse" id="admins-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="{{ ('admins.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                                            <li><a href="{{ ('admins.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <!-- Agents -->
                                <li class="mb-2 mt-1">
                                    <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#agents-collapse" aria-expanded="false">
                                        Agents
                                    </button>
                                    <div class="collapse" id="agents-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="{{ ('agents.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                                            <li><a href="{{ ('agents.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <!-- Customers -->
                                <li class="mb-2 mt-1">
                                    <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#customers-collapse" aria-expanded="false">
                                        Customers
                                    </button>
                                    <div class="collapse" id="customers-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="{{ ('customers.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                                            <li><a href="{{ ('customers.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <!-- Permissions -->
                    <li class="mb-2 mt-1">
                        <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#permissions-collapse" aria-expanded="false">
                            Permissions
                        </button>
                        <div class="collapse" id="permissions-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="{{ ('permissions.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                                <li><a href="{{ ('permissions.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </li>

        <!-- Bus Management -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#bus-management-collapse" aria-expanded="false">
                Bus Management
            </button>
            <div class="collapse" id="bus-management-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('bus.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                    <li><a href="{{ ('bus.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                    <!-- Add other bus management actions as needed -->
                </ul>
            </div>
        </li>

        <!-- Terminal Management -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#terminal-management-collapse" aria-expanded="false">
                Terminal Management
            </button>
            <div class="collapse" id="terminal-management-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('terminal.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                    <li><a href="{{ ('terminal.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                    <!-- Add other terminal management actions as needed -->
                </ul>
            </div>
        </li>

        <!-- Driver Management -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#driver-management-collapse" aria-expanded="false">
                Driver Management
            </button>
            <div class="collapse" id="driver-management-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('driver.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                    <li><a href="{{ ('driver.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                    <!-- Add other driver management actions as needed -->
                </ul>
            </div>
        </li>

        <!-- Conductor Management -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#conductor-management-collapse" aria-expanded="false">
                Conductor Management
            </button>
            <div class="collapse" id="conductor-management-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('conductor.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                    <li><a href="{{ ('conductor.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                    <!-- Add other conductor management actions as needed -->
                </ul>
            </div>
        </li>

        <!-- Route Management -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#route-management-collapse" aria-expanded="false">
                Route Management
            </button>
            <div class="collapse" id="route-management-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('route.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                    <li><a href="{{ ('route.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                    <!-- Add other route management actions as needed -->
                </ul>
            </div>
        </li>

        <!-- Trip Schedules -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#trip-schedules-collapse" aria-expanded="false">
                Trip Schedules
            </button>
            <div class="collapse" id="trip-schedules-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('trip.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                    <li><a href="{{ ('trip.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                    <!-- Add other trip schedule actions as needed -->
                </ul>
            </div>
        </li>

        <!-- Ticket Sales Management -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#ticket-sales-collapse" aria-expanded="false">
                Ticket Sales Management
            </button>
            <div class="collapse" id="ticket-sales-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('ticket.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                    <!-- Add other ticket sales management actions as needed -->
                </ul>
            </div>
        </li>

        <!-- Passenger Management -->
        <li class="mb-2 mt-1">
            <button class=" bg-body-secondary btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#passenger-management-collapse" aria-expanded="false">
                Passenger Management
            </button>
            <div class="collapse" id="passenger-management-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="{{ ('passenger.index') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">View</a></li>
                    <li><a href="{{ ('passenger.create') }}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Create</a></li>
                    <!-- Add other passenger management actions as needed -->
                </ul>
            </div>
        </li>

    </ul>
</div>
