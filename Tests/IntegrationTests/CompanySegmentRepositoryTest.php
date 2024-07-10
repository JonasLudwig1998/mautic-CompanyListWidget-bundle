<?php

namespace MauticPlugin\LeuchtfeuerCompanySegmentMembersWidgetBundle\Tests\IntegrationTests;

use MauticPlugin\LeuchtfeuerCompanySegmentsBundle\Entity\CompanySegment;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CompanySegmentRepositoryTest extends KernelTestCase
{
    private \MauticPlugin\LeuchtfeuerCompanySegmentMembersWidgetBundle\Entity\CompanySegmentRepository $companySegmentRepository;

    protected function setUp(): void
    {
        self::bootKernel();
        $entityManager = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();

        $this->companySegmentRepository = $entityManager->getRepository(CompanySegment::class, \MauticPlugin\LeuchtfeuerCompanySegmentMembersWidgetBundle\Entity\CompanySegmentRepository::class);

    }

    public function testGetSegmentObjectsViaListOfIDs()
    {
        // Get all Company Segments from the database
        $allCompanySegments = $this->companySegmentRepository->findAll();

        // Extract IDs of Company Segments
        $ids = [];
        foreach ($allCompanySegments as $segment) {
            $ids[] = $segment->getId();
        }

        // Call the method
        $result = $this->companySegmentRepository->getSegmentObjectsViaListOfIDs($ids);

        // Assert that result is an array
        $this->assertIsArray($result);

        // Assert that result contains instances of CompanySegment
        foreach ($result as $segment) {
            $this->assertInstanceOf(CompanySegment::class, $segment);
        }
    }
}
