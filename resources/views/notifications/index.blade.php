<x-app-layout>

    <div class="notifications-page-wrapper">
        <div class="container notifications-page">
            <div class="notifications-header mb-4">

                <div>
                    <div class="notifications-title">
                        🔔 Уведомления
                    </div>

                    <div class="notifications-subtitle">
                        История событий твоего персонажа
                    </div>
                </div>

            </div>

            @if($notifications->isEmpty())

                <div class="notifications-empty">

                    <div class="notifications-empty-icon">
                        🔕
                    </div>

                    <h4>
                        Журнал пуст
                    </h4>

                    <p>
                        Здесь будут появляться события твоего персонажа.
                    </p>

                </div>

            @else

                <div class="notifications-list">

                    @foreach($notifications as $notification)

                        @php
                            $type = $notification->data['type'] ?? 'unknown';
                        @endphp

                        <div class="notification-card {{ $type }}">

                            <div class="notification-icon">

                                @if($type === 'level_up')
                                    ⚔
                                @elseif($type === 'achievement_unlocked')
                                    🏆
                                @else
                                    🔔
                                @endif

                            </div>

                            <div class="notification-content">

                                <div class="notification-top">

                                    <div class="notification-title">
                                        {{ $notification->data['title'] ?? 'Уведомление' }}
                                    </div>

                                    @if(is_null($notification->read_at))
                                        <span class="notification-new">
                                            НОВОЕ
                                        </span>
                                    @endif

                                </div>

                                <div class="notification-message">
                                    {{ $notification->data['message'] ?? '' }}
                                </div>

                                @if($type === 'achievement_unlocked')

                                    <div class="notification-xp">
                                        +{{ $notification->data['xp_reward'] }} XP
                                    </div>

                                @endif

                                <div class="notification-date">
                                    {{ $notification->created_at->diffForHumans() }}
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <div class="notifications-pagination mt-4">
                    {{ $notifications->links() }}
                </div>

            @endif
        </div>
    </div>
<style>

    .notifications-page {
        padding-top: 40px;
        padding-bottom: 50px;
    }

    /* Header */

    .notifications-header {
        margin-bottom: 28px;
    }

    .notifications-title {
        color: #e8f1ff;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .notifications-subtitle {
        color: #71819a;
        font-size: 14px;
    }


    /* List */

    .notifications-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }


    /* Notification */

    .notification-card {
        position: relative;

        display: flex;
        align-items: flex-start;
        gap: 16px;

        padding: 18px 20px;

        background: #0b1627;

        border: 1px solid rgba(90, 150, 255, 0.10);
        border-radius: 12px;

        box-shadow:
            0 6px 20px rgba(0, 0, 0, 0.18);

        transition:
            transform 0.2s ease,
            border-color 0.2s ease,
            box-shadow 0.2s ease,
            background 0.2s ease;
    }

    .notification-card:hover {
        transform: translateY(-2px);

        background: #0d1a2e;

        border-color: rgba(90, 150, 255, 0.22);

        box-shadow:
            0 10px 28px rgba(0, 0, 0, 0.25);
    }


    /* Icon */

    .notification-icon {
        width: 46px;
        height: 46px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 20px;

        background: rgba(13, 110, 253, 0.10);

        border: 1px solid rgba(13, 110, 253, 0.22);
        border-radius: 10px;
    }


    /* Achievement icon */

    .notification-card.achievement_unlocked .notification-icon {
        background: rgba(255, 193, 7, 0.08);
        border-color: rgba(255, 193, 7, 0.20);
    }


    /* Content */

    .notification-content {
        flex: 1;
        min-width: 0;
    }

    .notification-top {
        display: flex;
        align-items: center;
        gap: 10px;

        margin-bottom: 4px;
    }

    .notification-title {
        color: #e8f1ff;

        font-size: 15px;
        font-weight: 700;
    }

    .notification-message {
        color: #aebbd0;

        font-size: 14px;
        line-height: 1.5;
    }

    .notification-date {
        margin-top: 7px;

        color: #64748b;

        font-size: 11px;
    }


    /* New badge */

    .notification-new {
        display: inline-flex;
        align-items: center;

        padding: 3px 7px;

        color: #6ea8fe;

        background: rgba(13, 110, 253, 0.10);

        border: 1px solid rgba(13, 110, 253, 0.18);
        border-radius: 5px;

        font-size: 9px;
        font-weight: 700;

        letter-spacing: 0.5px;
    }


    /* XP */

    .notification-xp {
        display: inline-block;

        margin-top: 8px;
        padding: 4px 8px;

        color: #ffc107;

        background: rgba(255, 193, 7, 0.08);

        border: 1px solid rgba(255, 193, 7, 0.15);
        border-radius: 5px;

        font-size: 12px;
        font-weight: 700;
    }


    /* Empty state */

    .notifications-empty {
        padding: 70px 20px;

        text-align: center;

        background: #0b1627;

        border: 1px solid rgba(90, 150, 255, 0.10);
        border-radius: 12px;

        box-shadow:
            0 6px 20px rgba(0, 0, 0, 0.18);
    }

    .notifications-empty-icon {
        margin-bottom: 14px;

        font-size: 38px;
        opacity: 0.65;
    }

    .notifications-empty h4 {
        color: #dbe8ff;

        font-size: 18px;
        font-weight: 600;
    }

    .notifications-empty p {
        margin-bottom: 0;

        color: #71819a;

        font-size: 14px;
    }


    /* Pagination */

    .notifications-pagination .pagination {
        margin-bottom: 0;
    }

    .notifications-pagination .page-link {
        color: #aebbd0;

        background: #0b1627;

        border-color: rgba(90, 150, 255, 0.10);
    }

    .notifications-pagination .page-link:hover {
        color: #e8f1ff;

        background: #0d1a2e;

        border-color: rgba(90, 150, 255, 0.20);
    }

    .notifications-pagination .page-item.active .page-link {
        color: #fff;

        background: #0d6efd;

        border-color: #0d6efd;
    }

    .notifications-page-wrapper {
            min-height: calc(100vh - 70px);

            background:
                radial-gradient(
                    circle at 50% 0%,
                    rgba(13, 110, 253, 0.06),
                    transparent 40%
                ),
                #07111f;
        }
    /* Mobile */

    @media (max-width: 576px) {

        .notifications-page {
            padding-top: 25px;
        }

        .notifications-title {
            font-size: 23px;
        }

        .notification-card {
            gap: 12px;
            padding: 15px;
        }

        .notification-icon {
            width: 40px;
            height: 40px;

            font-size: 18px;
        }

        .notification-title {
            font-size: 14px;
        }

        .notification-message {
            font-size: 13px;
        }
        
    }
</style>
</x-app-layout>