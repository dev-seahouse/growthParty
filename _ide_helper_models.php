<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Blog{
/**
 * App\Blog\Post
 *
 * @property int $id
 * @property int $author_id
 * @property int|null $category_id
 * @property string $title
 * @property string|null $seo_title
 * @property string $excerpt
 * @property string $body
 * @property string|null $image
 * @property string $slug
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $status
 * @property int $featured
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \TCG\Voyager\Models\User $authorId
 * @property-read \TCG\Voyager\Models\Category $category
 * @property-read mixed $estimated_read
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post published()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Blog\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Post withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 */
	class Post extends \Eloquent {}
}

namespace App{
/**
 * App\Conversation
 *
 * @property int $id
 * @property string|null $message
 * @property int $user_id
 * @property int $program_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Programs\Program $program
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereProgramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Conversation whereUserId($value)
 */
	class Conversation extends \Eloquent {}
}

namespace App{
/**
 * App\Industry
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereUpdatedAt($value)
 */
	class Industry extends \Eloquent {}
}

namespace App{
/**
 * App\Material
 *
 * @property-read \App\Programs\Program $program
 * @mixin \Eloquent
 * @property int $id
 * @property int $program_id
 * @property string $name
 * @property string $type
 * @property string $directory
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereProgramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Material whereUpdatedAt($value)
 */
	class Material extends \Eloquent {}
}

namespace App{
/**
 * App\Occupation
 *
 * @property int $id
 * @property string $title
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $name
 * @property int $industry_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Occupation whereName($value)
 */
	class Occupation extends \Eloquent {}
}

namespace App\Programs{
/**
 * App\Program
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Material[] $programMaterial
 * @property-read \App\ServiceProvider $serviceProvider
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @mixin \Eloquent
 * @property int $id
 * @property int $service_provider_id
 * @property int $affiliate_count
 * @property int $program_template_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Programs\ProgramTemplate $programTemplate
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program matchedPrograms($occupation)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereAffiliateCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereProgramTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereServiceProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\Program whereUpdatedAt($value)
 */
	class Program extends \Eloquent {}
}

namespace App\Programs{
/**
 * App\Programs\ProgramTemplate
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property array $matching_requirements
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Programs\Program[] $programs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereMatchingRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Programs\ProgramTemplate whereUpdatedAt($value)
 */
	class ProgramTemplate extends \Eloquent {}
}

namespace App{
/**
 * App\Rating
 *
 * @property int $id
 * @property int $service
 * @property int $communication
 * @property int $service_provider_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\ServiceProvider $serviceProvider
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCommunication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereServiceProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rating whereUpdatedAt($value)
 */
	class Rating extends \Eloquent {}
}

namespace App{
/**
 * App\ServiceProvider
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Programs\Program[] $programs
 * @property \Carbon\Carbon $created_at
 * @property int $id
 * @property \Carbon\Carbon $updated_at
 * @property string $name
 * @property string|null $address
 * @property string|null $uen
 * @property string|null $website
 * @property string|null $email
 * @property string $industry_id
 * @property string|null $phone
 * @property string|null $source
 * @property string|null $description
 * @property-read \App\Rating $ratings
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereUen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ServiceProvider whereWebsite($value)
 */
	class ServiceProvider extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property int|null $role_id
 * @property string|null $name
 * @property string $email
 * @property string|null $avatar
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $last_login
 * @property string|null $dob for verification
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $last_login_ip
 * @property string|null $registered_ip
 * @property int $is_activated
 * @property string $mobile
 * @property int $is_setup
 * @property string|null $occupation
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Programs\Program[] $programs
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsSetup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastLoginIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOccupation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRegisteredIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $maxMatches
 * @property int $occupation_id
 * @property int $industry_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereMaxMatches($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereOccupationId($value)
 */
	class User extends \Eloquent {}
}

