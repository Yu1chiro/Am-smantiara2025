<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CerpenResource\Pages;
use App\Models\Cerpen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CerpenResource extends Resource
{
    protected static ?string $model = Cerpen::class;

    // Icon buku untuk menu sidebar
    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    
    // Label di Sidebar
    protected static ?string $navigationLabel = 'Koleksi Cerpen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul Cerpen')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                // Menggunakan RichEditor sesuai instruksi karena authornya banyak
                Forms\Components\RichEditor::make('authors')
                    ->label('Sinopsis cerpen singkat & tambahkan nama author dibawah sinopsis')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'link',
                        'bulletList',
                        'orderedList',
                    ])
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('thumbnail_url')
                    ->label('Link Cover/Thumbnail (URL)')
                    ->url()
                    ->placeholder('https://...')
                    ->nullable(),

                Forms\Components\TextInput::make('cerpen_url')
                    ->label('Link Baca atau link google drive cerpen')
                    ->url()
                    ->required()
                    ->placeholder('https://googledrive.com')
                    ->helperText('Masukkan link lengkap menuju halaman baca cerpen.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_url')
                    ->label('Cover'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->weight('bold'),

                // Karena authors formatnya HTML (RichText), kita gunakan html() agar tag tidak muncul mentah
                Tables\Columns\TextColumn::make('authors')
                    ->label('Penulis')
                    ->html() 
                    ->limit(50) // Membatasi panjang teks agar tabel tidak berantakan
                    ->wrap(),

                Tables\Columns\TextColumn::make('cerpen_url')
                    ->label('Link')
                    ->icon('heroicon-m-link')
                    ->limit(30)
                    ->url(fn (Cerpen $record): string => $record->cerpen_url) // Bisa diklik langsung di tabel
                    ->openUrlInNewTab()
                    ->color('primary'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCerpens::route('/'),
            'create' => Pages\CreateCerpen::route('/create'),
            'edit' => Pages\EditCerpen::route('/{record}/edit'),
        ];
    }
}