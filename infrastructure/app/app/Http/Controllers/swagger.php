<?php
//puppet
/**
 * @OA\Schema(
 *     schema="Puppet",
 *     title="Puppet",
 *     description="Puppet schema",
 *     required={"name", "object_number", "date", "language_id", "info", "room_id", "company_id", "type_id"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="object_number", type="string"),
 *     @OA\Property(property="date", type="string", format="date"),
 *     @OA\Property(property="language_id", type="string", maxLength=2),
 *     @OA\Property(property="info", type="string"),
 *     @OA\Property(property="room_id", type="integer", format="int64"),
 *     @OA\Property(property="company_id", type="integer", format="int64"),
 *     @OA\Property(property="type_id", type="integer", format="int64"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time"),
 *     @OA\Property(
 *         property="makers",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Maker")
 *     ),
 *     @OA\Property(
 *         property="productions",
 *         type="array",
 *         @OA\Items(ref="#/components/schemas/Production")
 *     ),
 *     @OA\Property(
 *         property="room",
 *         ref="#/components/schemas/Room"
 *     ),
 *     @OA\Property(
 *         property="company",
 *         ref="#/components/schemas/Company"
 *     ),
 *     @OA\Property(
 *         property="type",
 *         ref="#/components/schemas/Type"
 *     ),
 * )
 */
//company
/**
 * @OA\Schema(
 *     schema="Company",
 *     title="Company",
 *     description="Company schema",
 *     required={"name", "language_id"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="language_id", type="string", maxLength=2),
 * )
 */
//Room
/**
 * @OA\Schema(
 *     schema="Room",
 *     title="Room",
 *     description="Room schema",
 *     required={"roomnumber", "language_id", "name"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="roomnumber", type="integer"),
 *     @OA\Property(property="language_id", type="string", maxLength=2),
 *     @OA\Property(property="name", type="string"),
 * )
 */
//Type
/**
 * @OA\Schema(
 *     schema="Type",
 *     title="Type",
 *     description="Type schema",
 *     required={"name", "language_id", "gameRelevant"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="language_id", type="string", maxLength=2),
 *     @OA\Property(property="gameRelevant", type="boolean"),
 * )
 */
//Makers
/**
 * @OA\Schema(
 *     schema="Maker",
 *     title="Maker",
 *     description="Maker schema",
 *     required={"name", "language_id"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="language_id", type="string", maxLength=2),
 * )
 */
//Production
/**
 * @OA\Schema(
 *     schema="Production",
 *     title="Production",
 *     description="Production schema",
 *     required={"name", "language_id", "date"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="language_id", type="string", maxLength=2),
 *     @OA\Property(property="date", type="string"),
 * )
 */
//getRooms
/**
 * @OA\Get(
 *     path="/puppets/rooms/{lang}",
 *     operationId="getRooms",
 *     tags={"Puppets"},
 *     summary="Get rooms",
 *     @OA\Parameter(
 *         name="lang",
 *         in="path",
 *         description="Language code",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(ref="#/components/schemas/Room")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Rooms not found",
 *     )
 * )
 */



