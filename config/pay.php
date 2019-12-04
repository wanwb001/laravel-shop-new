<?php

return [
    'alipay' => [
        'app_id'         => '2016101100659330',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAi5Q0liYeEYymK2FOcG/5l9nwm1+xvw0pByx9FMcqrFrcLw24+WnIyc8tbTCWDuY4yGcMfo1iMR5xQW+7ETo+HMX4Kky0Ftm38xeddG17R+v1wFz7puyE//ZUcpD/h2L6SE3asBUEu5eaFnmsTWQHbHy93sRgkPSDaktRW9tRjMPx2HTjfeAySfD+mK9y7+7lwp/FpUybGAPoR1jdhBBy8b49qgCRk2oVBelG/dxcH+OwTppY5tx/YemkEgey0C9WdDOOGp7EfFEDtIvNdMbD2zaJCtleRa9EOfYB9wC9Y06GYyfa+SaWMoZPbQhPuqqk6GfTTk1akNJ6fhfJoXfPtwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAnx7mX+b3fbpIOlOP1YI8kvEh+28tH4Ld3iYXNR1lgb2uXJHe1i+6nSsQ4dQ70l/LqpXauF/mjFSAWamovUIcJ/QPOmyZGAYke/AdsCgHFlnCwmwDxWmn5m+DvzdN/yL9FZW/mOIxtFRhkmdi7I/0EO/xO2lkfdt1ATcDTVCC6FdvBRP91z22nNkbsDThYDtiOM93X7dioukjVGBYKTUGts9b8x5hmtM/c6NB8Aii+kMlZQL8RKMa8yGTF0BIObh8zEK0xSgfUtk1hYhrLSZ+E9sX8dNqcKru/II9Q9ilJyQsXhjKJlGyTod4Qw92NtEnkrEWu9n/FyqGRte+ShslnwIDAQABAoIBAFFOqMk4bB6CoYWsTUL8WZd8P7ELDjOb22M4c4Ngkg3Jrt7+aq9nlCPbbbT3jdnhuWBhUnIEDvqF80/dsauDrH995ookE9aCzQHHoGPzECwLkclnCEZHxtOpB9kdmW1Vo5zz+ANXEa7jrzfwPExFAqHk+Y8yO3dUPGVyhu1qxnmR5WeZtDpWznkY1cZH+8qx7Bl3bn/gUqbst87MkoKrxDhQ/4iCagJ5ui+rysrtPPAuUEe+OzC22erWuDUC0x6eSbQMT7uKnvsOM9IjSHJrl3HS7S6LjntvqumSjYi15FCWoZkggJlvt5+zuY71sN2k+fS8tw2X8mNLKjSP+6RQ94ECgYEA0mmKPoKQGIBsEugoSjEX5NTht61bj0V2kqf4Zo8pvr2XCrpLJurxPzFUM06V2ZmcqdyDdceXZX0bQJa6sEtFzA5+SNwB5MgvYJS7wS5E/wTdGsXIRoFhCbakEZyA9zm0Nn/mJKLNKiljv/41X2D9/R5DjXz9FLMHb4FsHLidBz0CgYEAwZh8sRyTIXmxyFRb1Uxjh5PZI7FEUoO8c5jsw9zXAERm+wqTfDWKsgeNmeSoqpMUUMzCh7g6t8WlLtHGerAO0d6+43jo3qQ/jQSundfVET3hf2xvdZYDwxO9NtIA3DwAJm2IMN+9J4XNS+EsSNXnC298AEyR0N0+wC0QQxw4jgsCgYEAktRtUSPBNCfhwuvYubU6jEf13zwNKZR6ouquD7uVkPIyRZ0stlK62LMuo8MSFM/6IBqubfFC9+Juswq76iwM39G5VFSaybDcRtRjlPIZ2a/mLzmXgYPlWGboZRXGdT8CQAnOawBklShe4GqfihhgBVMqJsDyxpAL/0bcT8qQYa0CgYEAwKmFZik+zzCx2eECJ0rHPlTH4rp2ePu7XvtQnTc5DH4GUk1bK2CJb9UOeZnStTZ8IFE2QyT34o2ibu67bLurc/cN14krju68hBWlxVXXKDqCIHKEleu+QLRzOIxT6NkZeSTGRYVUVHHXNm2XycB+F6ZSLGYHM2oLGet+5JrAObMCgYACsl/W93r1J9X+NJBeVhCGw5uKnwlj1aXzx2e+tcNN5KWZKUC58LCViP4PffH+NWDoh/dRSNnYdxnsotEJyfyOF4Qjg4upGJEzrCgcyz/UfMjvXAH3+aW9VThwIAPvOEp2q4s4tFxqscCLwKBZ/aY6KralhB9ZsAZlZhsBq64tIQ==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
