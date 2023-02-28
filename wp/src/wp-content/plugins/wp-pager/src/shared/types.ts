export type ServerResponse<T> = {
    success: boolean
    message: string | null
    data: T
}

export type ImageFile = {
    id: number
    path: string
    url: string
    name: string
    visible: boolean
}

export type Config = {
    ajaxUrl: string
    nonce: string
    rootUrl: string
}

export type Settings = {
    albumSound: boolean
}

export type SwipeDirection = 'left' | 'right'